<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$api = app("Dingo\Api\Routing\Router");


$api->version('v1', function($api){

    $api->post("login", [
        "as" => "login",
        "uses" => "App\Http\Controllers\Api\Auth\LoginController@login"
    ]);

    $api->post("register", [
        "as" => "register",
        "uses" => "App\Http\Controllers\Api\Auth\RegisterController@register"
    ]);


    // $api->get("article", [
    //     "as" => "article",
    //     "uses" => "App\Http\Controllers\Api\ArticleController@getAllArticle"
    // ]);

});
