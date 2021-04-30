<?php

use Illuminate\Support\Facades\Route;
use App\Download;
use App\Http\Controllers\ZipController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/', 'site.pages.index');

Route::get('/about', 'site\PagesController@about')->name('about');
Route::get('/music', 'site\PagesController@music');
Route::get('/gigs', 'site\PagesController@gigs');
Route::get('/lessons', 'site\PagesController@lessons');
Route::get('/store', 'site\PagesController@store');
Route::get('/downloads', 'site\PagesController@downloads');
Route::get('/contact', 'site\PagesController@contact');

Auth::routes();
require 'admin.php';


//Shopping cart implementation

# Default route when accessing the website
Route::get('/', 'WebstoreController@index');

# The home route, which is used in the authentication scaffolding
# We update the closure argument to the index function of our controller
Route::get('/home', 'WebstoreController@index')->name('home');

# Adding a product to the shopping cart
Route::get('/add/{product}', 'WebstoreController@addToCart')->name('add');

# Removing an product from the shopping cart
Route::get('/remove/{productId}', 'WebstoreController@removeProductFromCart')->name('remove');

# Clearing all products from the shopping cart
Route::get('/empty', 'WebstoreController@destroyCart')->name('empty');

# PayPal checkout
Route::get('checkout', 'PaypalController@payWithpaypal')->name('checkout');

# PayPal status callback
Route::get('status', 'PaypalController@getPaymentStatus');

# Generated routes for authentication
Auth::routes();

Route::get('/zip', [ZipController::class, 'zipFile']);

Auth::routes([
    'verify' => true,
    'register' => false
]);