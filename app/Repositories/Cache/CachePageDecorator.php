<?php

namespace Modules\Ipage\Repositories\Cache;

use Modules\Ipage\Repositories\PageRepository;
use Imagina\Icore\Repositories\Cache\CoreCacheDecorator;

class CachePageDecorator extends CoreCacheDecorator implements PageRepository
{
    public function __construct(PageRepository $page)
    {
        parent::__construct();
        $this->entityName = 'ipage.pages';
        $this->repository = $page;
    }
}
