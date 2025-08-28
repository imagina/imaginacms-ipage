<?php

namespace Modules\Ipage\Models;

use Illuminate\Database\Eloquent\Model;

class PageTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'title',
        'slug',
        'status',
        'body',
        'meta_title',
        'meta_description',
        'og_title',
        'og_description',
        'og_image',
        'og_type',
    ];

    protected $table = 'ipage__page_translations';

    protected $casts = [
        'status' => 'boolean',
    ];

}
