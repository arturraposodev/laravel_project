<?php
Route::resource('/produtosnovos','ProdutoController');

Route::get('/produtos','ProdutoController@index');

Route::get('/contato','SiteController@contato');

Route::get('/','SiteController@index');

