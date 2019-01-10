<?php
Route::get('/cdmmadmin', function () { return redirect('/admin/home'); });

Route::get('/', 'ProductsController@index');
Route::get('/post/{id}', 'ProductsController@show');
Route::get('/tag/{id}', 'ProductsController@showtag');

Route::get('/category/{id}', 'ProductsController@showcategory');
Route::resource('comment', 'CommentsController');

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');
    Route::get('/calendar', 'Admin\SystemCalendarController@index'); 
  
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('user_actions', 'Admin\UserActionsController');
    Route::resource('products', 'Admin\ProductsController');
    Route::post('products_mass_destroy', ['uses' => 'Admin\ProductsController@massDestroy', 'as' => 'products.mass_destroy']);
    Route::resource('product_categories', 'Admin\ProductCategoriesController');
    Route::post('product_categories_mass_destroy', ['uses' => 'Admin\ProductCategoriesController@massDestroy', 'as' => 'product_categories.mass_destroy']);
    Route::resource('product_tags', 'Admin\ProductTagsController');
    Route::post('product_tags_mass_destroy', ['uses' => 'Admin\ProductTagsController@massDestroy', 'as' => 'product_tags.mass_destroy']);
    Route::resource('types', 'Admin\TypesController');
    Route::post('types_mass_destroy', ['uses' => 'Admin\TypesController@massDestroy', 'as' => 'types.mass_destroy']);
    Route::post('types_restore/{id}', ['uses' => 'Admin\TypesController@restore', 'as' => 'types.restore']);
    Route::delete('types_perma_del/{id}', ['uses' => 'Admin\TypesController@perma_del', 'as' => 'types.perma_del']);
    Route::resource('comments', 'Admin\CommentsController');
    Route::post('comments_mass_destroy', ['uses' => 'Admin\CommentsController@massDestroy', 'as' => 'comments.mass_destroy']);
    Route::post('comments_restore/{id}', ['uses' => 'Admin\CommentsController@restore', 'as' => 'comments.restore']);
    Route::delete('comments_perma_del/{id}', ['uses' => 'Admin\CommentsController@perma_del', 'as' => 'comments.perma_del']);
    Route::resource('likes', 'Admin\LikesController');
    Route::post('likes_mass_destroy', ['uses' => 'Admin\LikesController@massDestroy', 'as' => 'likes.mass_destroy']);
    Route::post('likes_restore/{id}', ['uses' => 'Admin\LikesController@restore', 'as' => 'likes.restore']);
    Route::delete('likes_perma_del/{id}', ['uses' => 'Admin\LikesController@perma_del', 'as' => 'likes.perma_del']);
    Route::resource('downloads', 'Admin\DownloadsController');
    Route::post('downloads_mass_destroy', ['uses' => 'Admin\DownloadsController@massDestroy', 'as' => 'downloads.mass_destroy']);
    Route::post('downloads_restore/{id}', ['uses' => 'Admin\DownloadsController@restore', 'as' => 'downloads.restore']);
    Route::delete('downloads_perma_del/{id}', ['uses' => 'Admin\DownloadsController@perma_del', 'as' => 'downloads.perma_del']);
    Route::resource('orders', 'Admin\OrdersController');
    Route::post('orders_mass_destroy', ['uses' => 'Admin\OrdersController@massDestroy', 'as' => 'orders.mass_destroy']);
    Route::post('orders_restore/{id}', ['uses' => 'Admin\OrdersController@restore', 'as' => 'orders.restore']);
    Route::delete('orders_perma_del/{id}', ['uses' => 'Admin\OrdersController@perma_del', 'as' => 'orders.perma_del']);



 
});
