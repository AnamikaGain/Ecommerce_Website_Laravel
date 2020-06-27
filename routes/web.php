<?php


Route::get('/',[
    'uses' => 'Fashion_webController@index',
    'as' => '/'
]);

Route::get('/category-product',[
    'uses' => 'Fashion_webController@categoryProduct',
    'as' => 'category-product'
]);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*
Route :: get('/add-category','CategoryController@index');
Route :: get('/all-category','CategoryController@allCategory');
Route :: post('/save-category','CategoryController@SaveCategory');
Route::get('/edit-category/{id}','CategoryController@edit_category');
Route::post('/update-category/{id}','CategoryController@update_category');
Route::get('/delete-category/{id}','CategoryController@delete_category');
Route::get('/unactive_category/{id}','CategoryController@unactive_category');
Route::get('/active_category/{id}','CategoryController@active_category');
*/
Route :: get('/add-brand','BrandController@index');
Route :: get('/all-brand','BrandController@allBrand');
Route :: post('/save-brand','BrandController@SaveBrand');

//products rotes
Route::get('/add-product','ProductController@index');
Route::post('/save-product','ProductController@save_product');
Route::get('/all-product','ProductController@all_product');
Route::get('/unactive_product/{product_id}','ProductController@unactive_product');
Route::get('/active_product/{product_id}','ProductController@active_product');
Route::get('/delete-product/{product_id}','ProductController@delete_product');
Route::get('/edit-product/{product_id}','ProductController@edit_product');
Route::post('/update-product/{product_id}','ProductController@update_product');
// Categories Routes (Admin)
Route::match(['get','post'],'/admin/add-category','CategoryController@addCategory');
Route::get('/admin/view-categories','CategoryController@viewCategories');

// Categories Routes (Front-end)
Route :: get('/Categories','CategoryController@viewFrontendCategories');

//products rotes(Front-end)
Route::get('/product/{url}','Fashion_webController@url');
Route::get('/category/{product_id}','Fashion_webController@showProduct');

//customer login and logout
Route::post('/customer_login','CheckoutController@customer_login');
Route::get('/customer_logout','CheckoutController@customer_logout');

Route::get('/payment','CheckoutController@payment');
Route::post('/order-place','CheckoutController@order_place');

Route::get('/manage-order','CheckoutController@manage_order');
Route::get('/view-order/{order_id}','CheckoutController@view_order');

//route for cart
//Route::post('/addToCart','CartController@addToCart');
Route::any('/cart/add',[
    'uses' => 'CartController@addToCart',
    'as' => 'add-to-cart'
]);
Route::get('/show','CartController@showCart');

Route::get('/cart/delete/{id}',[
    'uses' => 'CartController@delete',
    'as' => 'delete-cart-item'
]);
Route::post('/cart/update',[
    'uses' => 'CartController@updateCart',
    'as' => 'update-cart'
]);
Route::any('checkout',[
    'uses' => 'CheckoutController@index',
    'as' => 'checkout'
]);
Route::post('/customer/registration',[
    'uses' => 'CheckoutController@customerSignUp',
    'as' => 'customer-sign-up'
]);
Route::any('/checkout/shipping',[
    'uses' => 'CheckoutController@shippingForm',
    'as' => 'checkout-shipping'
]);
Route::post('/shipping/save',[
    'uses' => 'CheckoutController@saveShippingInfo',
    'as' => 'new-shipping'
]);
Route::post('/shipping/save',[
    'uses' => 'CheckoutController@saveShippingInfo',
    'as' => 'new-shipping'
]);
Route::any('/chechout/payment',[
    'uses' => 'CheckoutController@paymentForm',
    'as' => 'checkout-payment'
]);
