<?php

use Illuminate\Support\Facades\Route;
use Modules\Ipage\Http\Controllers\Api\PageApiController;
// add-use-controller

Route::prefix('/ipage/v1')->group(function () {
    Route::apiCrud([
      'module' => 'ipage',
      'prefix' => 'pages',
      'controller' => PageApiController::class,
      'permission' => 'ipage.pages',
      'middleware' => ['index' => [], 'show' => []],
      // 'customRoutes' => [ // Include custom routes if needed
      //  [
      //    'method' => 'post', // get,post,put....
      //    'path' => '/some-path', // Route Path
      //    'uses' => 'ControllerMethodName', //Name of the controller method to use
      //    'middleware' => [] // if not set up middleware, auth:api will be the default
      //  ]
      // ]
    ]);
// append
});
