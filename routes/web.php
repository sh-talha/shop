<?php

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
    return 'done';
});


Route::redirect('/', '/es');

Route::group(['prefix' => '{language}'], function () {
    
    //Auth::routes();

    Route::get('/','websiteController@index')->name('home');
    Route::get('/shop','websiteController@shop')->name('shop');
    Route::get('/logins','websiteController@login')->name('logins');
     Route::get('/login','websiteController@login')->name('login');
    Route::get('/selleraccount','websiteController@selleraccount')->name('selleraccount');
    Route::get('/termandcondition','websiteController@termandcondition')->name('termandcondition');
    Route::get('/termandcondition#report','websiteController@termandcondition')->name('termandcondition#report');
    Route::get('/privacy','websiteController@privacy')->name('privacy');
    Route::get('/policy','websiteController@policy')->name('policy');
    Route::get('/aboutus','websiteController@aboutus')->name('aboutus');
    Route::get('/faq','websiteController@faq')->name('faq');
    Route::get('/intellectualproperty','websiteController@intellectualproperty')->name('intellectualproperty');
    
    Route::get('/sellerlogin','websiteController@sellerlogin')->name('sellerlogin');
    Route::get('/registration','websiteController@registration')->name('registration');
    Route::get('/product/{id}','websiteController@product_detail')->name('product/{id}');
    Route::get('catfilter', 'ProductsController@cat_filters');
    Route::get('filterprice', 'ProductsController@filterprice');
    
    Route::get('cart', 'ProductsController@cart')->name('cart');
    Route::get('/myaccount','HomeController@myaccount')->name('myaccount');
    
    Route::get('checkout', 'ProductsController@checkout')->name('checkout');
    
    Route::get('confirmation', 'ProductsController@confirmation')->name('confirmation');
    
    Route::get('/order','HomeController@order')->name('order');
    Route::get('/contact','websiteController@contact')->name('contact');
    
    Route::get('/orderdetails','HomeController@orderdetails')->name('orderdetails');
    Route::post('/orderdispute','HomeController@orderdispute')->name('orderdispute');
    Route::get('/wishlist','HomeController@wishlist')->name('wishlist');
    Route::get('/profile','HomeController@profile')->name('profile');
    Route::get('/sellerdisputes','HomeController@sellerdisputes')->name('sellerdisputes');
    Route::get('/sellerreport','HomeController@sellerreport')->name('sellerreport');
    Route::post('add-review', 'ProductsController@addreview')->name('add-review');
    
    Route::post('/password/reset', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::get('report-product', 'ProductsController@reportproduct')->name('report-product');
    
    
});













Route::get('stripe', 'StripePaymentController@stripe');
Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');



Route::post('edit-image','HomeController@editprofile');



Route::post('/profilesubmit','HomeController@profilesubmit');

Route::get('wish/{id}','HomeController@wish');
Route::get('wishdelete/{id}','HomeController@wishdelete');

Route::get('state/{id}','HomeController@state');



Route::get('add-to-cart/{id}', 'ProductsController@addToCart');

Route::patch('update-cart', 'ProductsController@update');

Route::delete('remove-from-cart', 'ProductsController@remove');

Route::get('/ajaxUploadProductImages','admin.ProductCrudController@ajaxUploadProductImages');
// Route::get('/createProductImages','admin.ProductCrudController@ajaxUploadProductImages');



// Admin Interface
Route::group(['middleware' => 'admin',
			  'prefix'     => 'admin',
              'namespace'  => 'Admin'
], function () {

	CRUD::resource('categories', 'CategoryCrudController');
	CRUD::resource('currencies', 'CurrencyCrudController');
	CRUD::resource('carriers', 'CarrierCrudController');
	CRUD::resource('attributes', 'AttributeCrudController');
	CRUD::resource('attributes-sets', 'AttributeSetCrudController');
	CRUD::resource('products', 'ProductCrudController');
	
	CRUD::resource('taxes', 'TaxCrudController');
	// CRUD::resource('orders', 'OrderCrudController');

	CRUD::resource('order-statuses', 'OrderStatusCrudController');
	CRUD::resource('clients', 'ClientCrudController');
	CRUD::resource('users', 'UserCrudController');
	CRUD::resource('cart-rules', 'CartRuleCrudController');
	CRUD::resource('specific-prices', 'SpecificPriceCrudController');
	CRUD::resource('notification-templates', 'NotificationTemplateCrudController');

	Route::get('orders', 'OrderController@orders');
	Route::POST('ordersstatus', 'OrderController@ordersstatus');
	Route::get('orders/{id}', 'OrderController@ordersid');
	Route::get('products', 'ProController@product');
	Route::get('edit-account','profileController@profile');
	Route::get('deleteprofile/{id}','profileController@deleteprofile');



	Route::post('edit-image','profileController@editprofile');
	Route::post('editprofiledata','profileController@editprofiledata');

	Route::get('seller', 'ProController@seller');
	Route::get('offer', 'ProController@offer');
	Route::get('editvendor', 'ProController@editvendor');
	Route::get('dashboard', 'DashboardController@dashboard');
	
	Route::get('deleteproduct', 'ProController@deleteproduct');
	Route::get('deletespecialprice', 'ProController@deletespecialprice');
	Route::get('premium', 'ProController@premium');
	Route::get('deletevendor', 'ProController@deletevendor');
	Route::get('delux', 'ProController@delux');
	Route::get('collection', 'ProController@collection');
	Route::post('Addvendor', 'ProController@Addvendor');
	Route::post('updatevendor', 'ProController@updatevendor');

	// Clone Products
	Route::post('products/clone', ['as' => 'clone.product', 'uses' => 'ProductCrudController@cloneProduct']);

	// Update Order Status
	Route::post('orders/update-status', ['as' => 'updateOrderStatus', 'uses' => 'OrderCrudController@updateStatus']);

	Route::post('product/image/upload', ['as' => 'createProductImages', 'uses' => 'ProductCrudController@createajaxUploadProductImages']);
});


// Ajax
Route::group(['middleware' => 'admin',
			  'prefix' => 'ajax',
			  'namespace' => 'Admin'
], function() {

	// Get attributes by set id
	Route::post('attribute-sets/list-attributes', ['as' => 'getAttrBySetId', 'uses' => 'AttributeSetCrudController@ajaxGetAttributesBySetId']);

	// Product images upload routes
	Route::post('product/image/upload', ['as' => 'uploadProductImages', 'uses' => 'ProductCrudController@ajaxUploadProductImages']);



	// Route::post('product/image/upload', ['as' => 'createProductImages', 'uses' => 'ProductCrudController@createajaxUploadProductImages']);

	Route::post('product/image/reorder', ['as' => 'reorderProductImages', 'uses' => 'ProductCrudController@ajaxReorderProductImages']);
	
	Route::post('product/image/delete', ['as' => 'deleteProductImage', 'uses' => 'ProductCrudController@ajaxDeleteProductImage']);

	// Get group products by group id
	Route::post('product-group/list/products', ['as' => 'getGroupProducts', 'uses' => 'ProductGroupController@getGroupProducts']);
	Route::post('product-group/list/ungrouped-products', ['as' => 'getUngroupedProducts', 'uses' => 'ProductGroupController@getUngroupedProducts']);
	Route::post('product-group/add/product', ['as' => 'addProductToGroup', 'uses' => 'ProductGroupController@addProductToGroup']);
	Route::post('product-group/remove/product', ['as' => 'removeProductFromGroup', 'uses' => 'ProductGroupController@removeProductFromGroup']);

	// Client address
	Route::post('client/list/addresses', ['as' => 'getClientAddresses', 'uses' => 'ClientAddressController@getClientAddresses']);
	Route::post('client/add/address', ['as' => 'addClientAddress', 'uses' => 'ClientAddressController@addClientAddress']);
	Route::post('client/delete/address', ['as' => 'deleteClientAddress', 'uses' => 'ClientAddressController@deleteClientAddress']);

	// Client company
	Route::post('client/list/companies', ['as' => 'getClientCompanies', 'uses' => 'ClientCompanyController@getClientCompanies']);
	Route::post('client/add/company', ['as' => 'addClientCompany', 'uses' => 'ClientCompanyController@addClientCompany']);
	Route::post('client/delete/company', ['as' => 'deleteClientCompany', 'uses' => 'ClientCompanyController@deleteClientCompany']);

	// Notification templates
	Route::post('notification-templates/list-model-variables', ['as' => 'listModelVars', 'uses' => 'NotificationTemplateCrudController@listModelVars']);
});





Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
