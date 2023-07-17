<?php
use Pecee\SimpleRouter\SimpleRouter;
   try {
    
SimpleRouter::setDefaultNamespace('sys\Controllers');

SimpleRouter::get(URL_SITE.'','SiteController@home');
SimpleRouter::get(URL_SITE.'/home','SiteController@index');
SimpleRouter::get(URL_SITE.'/sobre','SiteController@sobre');
SimpleRouter::get(URL_SITE.'/contact','SiteController@contact');
SimpleRouter::get(URL_SITE.'/post/{id}','SiteController@post');
SimpleRouter::get(URL_SITE.'/category/{id}','SiteController@category');
SimpleRouter::post(URL_SITE.'/search','SiteController@search');
SimpleRouter::start();
} catch (Pecee\SimpleRouter\Exceptions\HttpException $exc) {
    echo '<h1>Error 404, page not found!</h1>';


}
