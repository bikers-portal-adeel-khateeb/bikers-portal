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
// Route::view('thanks','thanks');
Route::patch('/profile/{profile}', 'ProfileController@update')->name('updateProfile');
Route::patch('/profile/password/{profile}', 'ProfileController@updatePassword')->name('updatePassword');
Route::get('/profile/{profile}', 'ProfileController@edit')->name('editProfile');
Route::get('/profile/password/{profile}', 'ProfileController@editPassword')->name('editPassword');
Route::get('/profile', 'ProfileController@show')->name('profile')->middleware('auth');

Route::get('/orderDetail/{order}','OrderController@show')->name('orderDetail');
Route::get('/rent/detail/{rentbike}','RentbikeController@show')->name('rentDetail');
Route::post('/rent/rentbike','RentbikeController@rentbike')->name('rentbike');
Route::post('/rent/rentbike/{rentbike}','RentbikeController@askRent')->name('askRent');
Route::post('/placRentOrder','RentbikeController@placeRentOrder')->name('rentOrder');
Route::get('/checkout', 'OrderController@checkout')->name('checkout')->middleware('auth','customer');
Route::post('/placeorder', 'OrderController@placeOrder')->name('placeOrder')->middleware('auth','customer');
Route::get('/addToCart/{product}', 'CartController@addToCart')->name('addToCart');
Route::patch('/updateCart/{id}', 'CartController@update')->name('updateCart');
Route::delete('/removeCart/{id}', 'CartController@destroy')->name('removeCart');
Route::get('orderAccept/{order}','orderController@accept')->name('statusAccept');
Route::get('orderCancel/{order}','orderController@reject')->name('statusCancel');
Route::get('rentOrderAccept/{rentOrder}','rentOrderController@accept')->name('rentStatusAccept');
Route::get('rentOrderCancel/{rentOrder}','rentOrderController@reject')->name('rentStatusCancel');
Route::get('/address/{address}', 'AddressController@show')->name('rentAddress');


Route::get('/cart', 'CartController@cart')->name('cart');

Route::post('/prduct/edit/{product}', 'ProductController@edit')->name('editProduct')->middleware('admin');
Route::patch('/prduct/{product}', 'ProductController@update')->name('updateProduct');
Route::delete('/prduct{product}', 'ProductController@destroy')->name('deleteProduct');

Route::post('/rentbike/edit/{rentbike}', 'RentbikeController@edit')->name('editRent')->middleware('admin');
Route::patch('/rentbike/update/{rentbike}', 'Rentbikecontroller@update')->name('updateRent');
Route::delete('/rentbike/delete/{rentbike}', 'Rentbikecontroller@destroy')->name('deleteRent');


Route::get('/', 'HomeController@index')->name('/');
Route::get('/bikes', 'HomeController@bikes')->name('bikes');
Route::get('/parts', 'HomeController@parts')->name('parts');
Route::get('/accessories', 'HomeController@accessories')->name('accessories');
Route::get('/rent', 'RentbikeController@index')->name('rent');
Route::get('/product/detail/{product}', 'HomeController@show');

Auth::routes();

Route::get('/admin_dashboard', 'DashboardController@index')->name('admin_dashboard')->middleware('admin');
Route::get('/admin_dashboard/create', 'DashboardController@create')->name('create')->middleware('admin');
Route::get('/admin_dashboard/addRent', 'DashboardController@addRent')->name('addRent')->middleware('admin');
Route::get('/admin_dashboard/inventory', 'DashboardController@inventory')->name('inventory')->middleware('admin');
Route::get('/admin_dashboard/users', 'DashboardController@users')->name('users')->middleware('admin');
Route::get('/block/{user}', 'DashboardController@blockUser')->name('blockUser')->middleware('admin');
Route::get('/unblock/{user}', 'DashboardController@unblockUser')->name('unblockUser')->middleware('admin');

Route::get('/admin_dashboard/orders', 'DashboardController@orders')->name('orders')->middleware('admin');

Route::post('/admin_dashboard/store', 'ProductController@store')->name('store')->middleware('admin');
Route::post('/admin_dashboard/storeRent', 'RentbikeController@storeRent')->name('storeRent')->middleware('admin');

Route::get('/kawasaki','ProductController@kawasaki')->name('kawasaki');
Route::get('/yamaha','ProductController@yamaha')->name('yamaha');
Route::get('/suzuki','ProductController@suzuki')->name('suzuki');
Route::get('/honda','ProductController@honda')->name('honda');
Route::get('/engine_covers','ProductController@engineCovers')->name('engine_covers');
Route::get('/air_cleaner','ProductController@airCleaner')->name('air_cleaner');
Route::get('/turn_lights','ProductController@turnLights')->name('turn_lights');
Route::get('/headlight','ProductController@headlight')->name('headlight');
Route::get('/tyre','ProductController@tyre')->name('tyre');
Route::get('/rim','ProductController@rim')->name('rim');
Route::get('/watches','ProductController@watches')->name('watches');
Route::get('/glasses','ProductController@glasses')->name('glasses');
Route::get('/helmet','ProductController@helmet')->name('helmet');
Route::get('/gloves','ProductController@gloves')->name('gloves');
Route::get('/jacket','ProductController@jacket')->name('jacket');
Route::get('/shoes','ProductController@shoes')->name('shoes');











