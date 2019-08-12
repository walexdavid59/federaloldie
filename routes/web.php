<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/home', function () {
    return view('pages.index');
});
Route::get('/', function () {
    return view('pages.index');
});

Route::get('/about_us', function () {
    return view('pages.about');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/how_to', function () {
    return view('pages.howto');
});

// Route::get('/winners', function () {
//     return view('pages.winners');
// });

Route::get('/my_winning', function () {
    return view('pages.mywinning');
});

Route::get('/family_winning', function () {
    return view('pages.familywinning');
});

Route::get('/terms', function () {
    return view('pages.terms');
});

Route::get('/review', function () {
    return view('pages.review');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/admin', function () {
    return view('admin.login');
});

Route::get('/dashboard', function () {
    return view('admin.pages.dashboard');
});

Route::get('/add_winners', function () {
    return view('admin.pages.addwinners');
});

// Route::get('/listwinners', function () {
//     return view('admin.pages.listwinners');
// });

Route::get('/add_slider', function () {
    return view('admin.pages.addslider');
});

// Route::get('/winners', function () {
//     return view('pages.winners');
// });
Route::get('/add-grant', function () {
    return view('admin.pages.addgrants');
});
Route::post('/create_grant', 'GrantController@Savegrant');
Route::get('/grant_list', 'GrantController@Listgrant');
Route::get('/view-grant', 'GrantController@Viewgrant');
Route::get('/view-order', 'OrderController@Vieworder');
Route::get('/order/pid/{id}', 'GrantController@orderGrant');
Route::get('/winners', 'WinnersController@winnerslist');
Route::post('/create_order', 'GrantController@Saveorder');
Route::post('/create_verify', 'GrantController@Saveverify');

Route::get('/list_winners', 'WinnersController@Listwinners');
// Route::get('/login', 'HomeController@getLogout');
Route::get('/logout', 'HomeController@getLogout');
Route::post('/login', 'HomeController@postSignin')->name('admin_login');
Route::get('/dashboard', 'HomeController@AdminHome');
Route::post('/create_winners', 'WinnersController@Savewinners');

Route::get('edit_winner/{id}/edit', 'WinnersController@Editwinner');
Route::get('edit_grant/{id}/edit', 'GrantController@EditViewGrant');
Route::post('update_winners', 'WinnersController@UpdateWinner');
Route::post('update_grant', 'GrantController@UpdateGrant');
Route::delete('deletewinner/{id}', 'WinnersController@DeleteWinner');
Route::get('delete-grant/{id}', 'GrantController@DeleteViewGrant');

Route::post('/create_slider', 'WinnersController@Uploadslider');


// Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');