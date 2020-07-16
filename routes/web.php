<?php

Route::get('/inicio', 'WebController@home')->name('web.home');
Route::get('/cursos', 'WebController@course')->name('web.course');
Route::get('/blog', 'WebController@blog')->name('web.blog');
Route::get('/artigo/{uri}', 'WebController@article')->name('web.article');
Route::get('/contato', 'WebController@contact')->name('web.contact');

Route::post('/send-mail', 'WebController@sendMail')->name('web.send-mail');
