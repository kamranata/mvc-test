<?php

use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace('\App\Controllers');

SimpleRouter::get('/', 'TaskController@index');
SimpleRouter::get('create', 'TaskController@create');
SimpleRouter::post('store', 'TaskController@store');

SimpleRouter::start();
