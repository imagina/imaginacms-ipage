<?php

namespace Modules\Ipage\Repositories\Eloquent;

use Modules\Ipage\Repositories\PageRepository;
use Imagina\Icore\Repositories\Eloquent\EloquentCoreRepository;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class EloquentPageRepository extends EloquentCoreRepository implements PageRepository
{
    /**
     * Filter names to replace
     * @var array
     */
    protected array $replaceFilters = [];

    /**
     * Relation names to replace
     * @var array
     */
    protected array $replaceSyncModelRelations = [];

    /**
     * Attribute to define default relations
     * all apply to index and show
     * index apply in the getItemsBy
     * show apply in the getItem
     * @var array
     */
    protected array $with = [/*all => [] ,index => [],show => []*/];

    /**
     * @param Builder $query
     * @param object $filter
     * @param object $params
     * @return Builder
     */
    public function filterQuery(Builder $query, object $filter, object $params): Builder
    {

        /**
         * Note: Add filter name to replaceFilters attribute before replace it
         *
         * Example filter Query
         * if (isset($filter->status)) $query->where('status', $filter->status);
         *
         */

        //add filter by search
        if (isset($filter->search) && $filter->search) {
            //find search in columns
            $term = $filter->search;
            $query->where(function ($query) use ($term, $filter) {
                $query->whereHas('translations', function ($query) use ($term, $filter) {
                    $query->where('title', 'LIKE', "%{$term}%");
                    $query->orWhere('body', 'LIKE', "%{$term}%");
                    $query->orWhere('slug', 'LIKE', "%{$term}%");
                    $words = explode(' ', trim($filter->search));

                    //queryng word by word
                    if (count($words) > 1) {
                        foreach ($words as $index => $word) {
                            if (strlen($word) >= ($filter->minCharactersSearch ?? 3)) {
                                $query->orWhere('title', 'like', "%" . $word . "%")
                                    ->orWhere('body', 'like', "%" . $word . "%");
                            }
                        } //foreach
                    }
                })->orWhere('id', $term);
            });
        }

        //Response
        return $query;
    }

    /**
     * @param Model $model
     * @param array $data
     * @return Model
     */
    public function syncModelRelations(Model $model, array $data): Model
    {
        //Get model relations data from model attributes
        //$modelRelationsData = ($model->modelRelations ?? []);

        /**
         * Note: Add relation name to replaceSyncModelRelations attribute before replace it
         *
         * Example to sync relations
         * if (array_key_exists(<relationName>, $data)){
         *    $model->setRelation(<relationName>, $model-><relationName>()->sync($data[<relationName>]));
         * }
         *
         */

        //Response
        return $model;
    }
}
