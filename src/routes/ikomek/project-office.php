<?php

Route::group(
[
    'prefix' => 'project-office',
    'namespace' => 'Darmen\IKomekProjectOffice\app\Http\Controllers',
], function () {

    Route::get('/', 'ProjectOfficeController@index')->name('ikomek.project-office');

});