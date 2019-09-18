<?php

Route::get('/',['as'=>'admin.index', 'uses'=>'HomeController@index']);
Route::group(['middleware' => ['auth']], function () {

Route::get('/logout', 'Auth\LoginController@logout');

/*
=========================================
Route nya Resipien
=========================================
*/  
    Route::group(['prefix' => 'resipien'], function() {
        
        //Resipien
        Route::get('biodata-resipien/','Resipien\BiodataResipienController@index');

        // Menampilkan form tambah biodata
        Route::get('biodata-resipien/create','Resipien\BiodataResipienController@create');

        // Menambahkan form yg di isi tadi ke tabel biodata
        Route::post('biodata-resipien/create','Resipien\BiodataResipienController@createAction');

        // Menghapus biodata sesuai id yang dipilih
        Route::get('biodata-resipien/{id}/delete','Resipien\BiodataResipienController@delete');

        // Menampilkan form edit biodata dari id yg dipilih
        Route::get('biodata-resipien/{id}/edit','Resipien\BiodataResipienController@edit');

        // Mengupdate biodata dengan isi dari form
        Route::post('biodata-resipien/{id}/edit','Resipien\BiodataResipienController@editAction');
    });
    Route::group(['prefix' => 'ahp'], function() {
        
        //Resipien
        Route::get('kriteria/','Ahp\KriteriaController@index');

        // // Menampilkan form tambah biodata
        // Route::get('biodata-resipien/create','Resipien\BiodataResipienController@create');

        // // Menambahkan form yg di isi tadi ke tabel biodata
        // Route::post('biodata-resipien/create','Resipien\BiodataResipienController@createAction');

        // // Menghapus biodata sesuai id yang dipilih
        // Route::get('biodata-resipien/{id}/delete','Resipien\BiodataResipienController@delete');

        // // Menampilkan form edit biodata dari id yg dipilih
        // Route::get('biodata-resipien/{id}/edit','Resipien\BiodataResipienController@edit');

        // // Mengupdate biodata dengan isi dari form
        // Route::post('biodata-resipien/{id}/edit','Resipien\BiodataResipienController@editAction');
    });
});