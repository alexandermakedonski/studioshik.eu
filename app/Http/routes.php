<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('/contacts','ContactsController@index');
Route::post('/contacts','ContactsController@mail');

Route::get('/news/{id}','NewsController@index');

Route::get('/admin/login','AuthController@index');
Route::post('/admin/login','AuthController@postindex');

Route::get('/admin/logout','UsersController@signout');

Route::get('/admin','AdminController@index');

Route::get('/admin/account/registration','UsersController@create');
Route::post('/admin/account/registration','UsersController@postcreate');

Route::get('/admin/account/select','UsersController@accountselect');

Route::get('/admin/account/correction/{id}','UsersController@accountcorrection');
Route::get('/admin/account/delete/{id}','UsersController@accountDelete');
Route::post('/admin/account/correction/complete','UsersController@accountcorrectioncomplete');

Route::get('/admin/services/categoryadd','ServiceController@categoryAdd');
Route::post('/admin/services/categoryadd','ServiceController@postcategoryAdd');

Route::get('/admin/services/categorydelete','ServiceController@categoryDelete');
Route::get('/admin/services/categorydelete/{id}','ServiceController@postcategoryDelete');

Route::get('/admin/services/service/addservice','ServiceController@serviceAdd');
Route::post('/admin/services/service/addservice','ServiceController@postserviceAdd');

Route::get('/admin/services/service/select','ServiceController@serviceCorrection');
Route::get('/admin/services/service/select/correction/{id}','ServiceController@postserviceCorrection');
Route::get('/admin/services/service/select/delete/{id}','ServiceController@serviceDelete');
Route::post('/admin/services/service/select/correction/complete','ServiceController@serviceCorrectionComplete');

Route::get('/admin/promotions/addpromotion','PromotionController@addpromotion');
Route::post('/admin/promotions/addpromotion','PromotionController@postPromotion');

Route::get('/admin/promotions/panel','PromotionController@panelPromotion');
Route::post('/admin/promotions/edit','PromotionController@hidePromotion');

Route::get('/admin/promotions/promotion/select','PromotionController@promotionCorrection');
Route::get('/admin/promotions/promotion/select/{id}','PromotionController@postpromotionCorrection');
//Route::post('/admin/promotions/promotion/select/correction/complete','PromotionController@postpromotionCorrectionComplete');

Route::get('/admin/gallery/addcategory','GalleryController@addGalleryCategory');
Route::post('/admin/gallery/addcategory','GalleryController@postGalleryCategory');

Route::get('/admin/gallery/dellcategory','GalleryController@delGalleryCategory');
Route::get('/admin/gallery/dellcategory/{id}','GalleryController@postDelGalleryCategory');

Route::get('/admin/gallery','GalleryController@galleryIndex');
Route::post('/admin/gallery/showindex','GalleryController@showIndex');
Route::post('/admin/gallery/saveimage','GalleryController@saveImage');
Route::post('/admin/gallery/image','GalleryController@dataImage');

Route::get('/admin/news/addnew','NewController@addNew');
Route::post('/admin/news/addnew','NewController@postNew');

Route::get('/admin/news/new/select','NewController@newCorrection');
Route::get('/admin/news/new/select/correction/{id}','NewController@postNewCorrection');
Route::get('/admin/news/new/select/delete/{id}','NewController@postNewDel');
Route::post('/admin/news/new/select/correction/complete','NewController@postNewCorrectionComplete');

/*
Route::get('/admin/test','TestController@test');
Route::post('/admin/gallery','TestController@gallerypost');
Route::post('/admin/test/add','TestController@imagepost');
Route::post('/admin/test/image','TestController@iamgedata');*/