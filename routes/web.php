<?php

Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('car/add', 'CarController@create');
Route::get('car/{car}/delete', [
    'as'   => 'car.delete',
    'uses' => 'CarController@destroy',
]);
Route::resource('/car', 'CarController');


function is_active_sorter($key, $direction = 'ASC')
{
    if (request('sortby') == $key && request('sortdir') == $direction) {
        return true;
    }

    return false;
}


