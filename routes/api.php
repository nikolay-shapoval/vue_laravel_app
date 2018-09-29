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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/bloggers/', 'ApiController@getBloggers')->name('bloggers');
Route::get('/blogger/{channel}', 'ApiController@getBlogger')->name('blogger');
Route::get('/blogger/{channel}/videos', 'ApiController@getVideos')->name('videos');
Route::put('/blogger/{channel}/updateBlogger', 'ApiController@updateBlogger')->name('updateBlogger');
Route::post('/blogger/storeComment', 'ApiController@storeComment')->name('storeComment');
Route::post('/blogger/uploadChannelPicture', 'FileController@uploadChannelPicture')->name('uploadChannelPicture');
Route::get('/download/{id}', 'FileController@download')->name('download');
