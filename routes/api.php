<?php declare(strict_types=1);

use Illuminate\Http\Request;
use Illuminate\Routing\Router;

/** @var $router Router */
$router->middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
