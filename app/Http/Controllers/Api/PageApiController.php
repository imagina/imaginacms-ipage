<?php

namespace Modules\Ipage\Http\Controllers\Api;

use Imagina\Icore\Http\Controllers\CoreApiController;
//Model
use Modules\Ipage\Models\Page;
use Modules\Ipage\Repositories\PageRepository;

class PageApiController extends CoreApiController
{
  public function __construct(Page $model, PageRepository $modelRepository)
  {
    parent::__construct($model, $modelRepository);
  }
}
