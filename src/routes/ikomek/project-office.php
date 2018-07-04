<?php

Route::group(
[
    'prefix' => 'project-office',
    'namespace' => 'Darmen\IKomekProjectOffice\app\Http\Controllers',
], function () {

    Route::get('/', 'ProjectOfficeController@index')->name('ikomek.project-office');
    Route::get('/category/{category_id}', 'ProjectOfficeController@category')->name('ikomek.project-office.office');
    Route::get('/category/{category_id}', 'ProjectOfficeController@category')->name('ikomek.project-office.category');
    Route::get('/project/{project_id}', 'ProjectOfficeController@project')->name('ikomek.project-office.project');

});