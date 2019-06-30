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

Auth::routes();

/* Routes of home */
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'WelcomeController@index')->name('welcome');

/* Tattoos route*/
Route::get('/Tattoos', 'WelcomeController@Tattoo')->name('Tattoos');

/* Products route*/
Route::get('/Products', 'WelcomeController@Products')->name('Products');

/* Artists route*/
Route::get('/Artists', 'WelcomeController@Artists')->name('Artists');

/* Contact Us route*/
Route::get('/ContactUs', 'WelcomeController@ContactUs')->name('ContactUs');

/*Help route*/
Route::get('/Help', 'WelcomeController@Help')->name('Help');

Route::resource('/Newsletter','newsletterController');

/*Admin Dashboard Routes*/
Route::resource('/AdminDashboard','AdminDashboardController');

Route::get('/AdminViewContactUs', 'AdminDashboardController@ContactUs')->name('AdminViewContactUs');

Route::get('/AdminViewNewsletter', 'AdminDashboardController@Newsletter')->name('AdminViewNewsletter');

Route::get('/AdminViewUsers', 'AdminDashboardController@ViewUsers')->name('AdminViewUsers');

Route::get('/AdminViewArtists', 'AdminDashboardController@ViewArtist')->name('AdminViewArtists');

Route::get('/AdminViewTattoos', 'AdminDashboardController@ViewTattoo')->name('AdminViewTattoos');

Route::get('/AdminViewCategories' ,'AdminDashboardController@ViewCategories')->name('AdminViewCategories');

Route::get('/AdminViewProducts', 'AdminDashboardController@ViewProducts')->name('AdminViewProducts');

Route::get('/AdminProfile', 'AdminDashboardController@AdminP')->name('AdminProfile');

Route::get('/AdminViewArtists','AdminDashboardController@ViewArtist')->name('AdminViewArtists');

Route::get('/AdminViewArtistReservations', 'AdminDashboardController@ViewReservations')->name('AdminViewReservations');

Route::get('/ViewReviews','AdminDashboardController@Review')->name('ViewReview');

Route::get('/AdminViewBookings', 'AdminDashboardController@ViewBookings')->name('AdminViewBookings');

Route::get('/AdminViewTattooTransactions', 'AdminDashboardController@ViewTattooTransaction')->name('AdminViewTattooTransaction');

Route::get('/AdminViewProductTransactions', 'AdminDashboardController@ViewProductTransaction')->name('AdminViewProductTransaction');

Route::post('/Login/custom', 'LoginController@login')->name('Login.custom');

Route::get('/Login', 'LoginController@index')->name('Login');

/*User Dashboard Route*/
Route::resource('/UserDashboard', 'UserDashboardController');

Route::get('/UserProfile', 'UserDashboardController@UserP')->name('UserProfile');

Route::get('/UserProfileEdit', 'UserDashboardController@edit')->name('UserProfileEdit');

Route::get('/UserUploadPhoto', 'UserDashboardController@create')->name('UserUploadPhoto');

Route::resource('/AddTattoos','TattooController');

Route::resource('/Product','ProductsController');

Route::resource('/Category','CategoryController');

Route::resource('/ContactUsSave','ContactUsController');

Route::resource('/Review','ReviewController');

Route::resource('/Booking','BookingController');

Route::resource('/Artist','artistController');

Route::resource('/Buy','buyController');

Route::resource('/ManageUser','ManageUserController');

Route::get('/UserViewBookings', 'UserDashboardController@ViewBooking')->name('ViewBookings');

Route::resource('/ArtistReservation', 'ArtistReservationController');

Route::resource('/ArtistReview','ArtistreviewsController');

Route::resource('/TattooReview','TattooreviewsController');

Route::resource('/ProductReview','ProductreviewsController');

Route::resource('/ProductBuy','BuyProductsController');
