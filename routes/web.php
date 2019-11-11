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


Route::post('register', 'Auth\RegisterController@register')->name('register');


Route::get('admin/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
Route::post('admin/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

Route::get('admin/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset.token');
Route::post('admin/password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/verify/{token}', 'Auth\RegisterController@verify');
Route::group(['middleware' => ['revalidate']], function () {
	Route::get('/admin', 'AdminController@index')->name('login');
	Route::post('/admin/login', 'AdminController@login')->name('admin.login');
});






Route::group(['prefix' => 'admin', 'middleware' =>  ['auth', 'revalidate']], function () {

	Route::get('dashboard', 'AdminController@dashboard')->name('admin.dashboard');

	Route::resource('blog', 'BlogController');

	Route::post('blog/id/update_blog', 'BlogController@updateBlog')->name('blog.updates');

	Route::get('user/user-list', 'AdminController@users')->name('users');
	Route::get('user/subscriber-list', 'AdminController@transaction')->name('subscribe.users');
	Route::get('user/transaction-list', 'AdminController@transaction')->name('transaction.users');
	Route::post('user/delete', 'AdminController@removeUser')->name('users.delete');
	Route::post('user/delete-susbcriber', 'AdminController@removeSubscribedUser')->name('subscribe.delete');

	Route::get('user/robot', 'AdminController@robot')->name('robot');
	Route::get('user/upload-zip/{id}', 'AdminController@upload')->name('upload');
	Route::post('user/upload-zip', 'AdminController@uploadZip')->name('upload-zip');
	Route::get('user/send-zip/{id}', 'AdminController@sendZip')->name('send-zip');
	Route::post('delete-robot/', 'AdminController@deleteRobot')->name('delete-zip');

	Route::get('settings/change-config', 'AdminController@changeConfig')->name('users.changeConfig');
	Route::post('update-config', 'AdminController@updateConfig')->name('users.updateConfig');

	Route::get('/uploadfile', 'UploadFileController@index')->name('uploads');
	Route::post('/uploadfile', 'UploadFileController@UploadFile')->name('csv.uploadfile');
	Route::post('/uploadMultiplefile', 'UploadFileController@UploadMultipleFile')->name('csv.uploadmultiplefile');

	Route::get('settings/change-password', 'AdminController@changePassword')->name('settings.changePassword');
	Route::post('settings/credentials', 'AdminController@postCredentials')->name('settings.updatePassword');


	Route::get('logout', 'AdminController@logout')->name('admin.logout');
});



Route::group(['middleware' => ['revalidate']], function () {
	Route::get('/clear-cache', function () {
		$exitCode = Artisan::call('cache:clear');
		dd($exitCode);
		die;
		// return what you want
	});


	Route::get('email-confirm', 'FrontEnd\FrontEndController@emailBlade');
	Route::get('thankyou', 'FrontEnd\FrontEndController@thankyou');
	Route::get('payment', 'FrontEnd\FrontEndController@paymentBlade');
	Route::get('payment-confirm', 'FrontEnd\FrontEndController@paymentConfirmBlade');
	Route::get('reset', 'FrontEnd\FrontEndController@reset');
	Route::get('verification', 'FrontEnd\FrontEndController@verification');
	Route::post('isEmailAvailable', 'FrontEnd\FrontEndController@isEmailAvailable');

	Route::get('/', 'FrontEnd\FrontEndController@index')->name('frontend.index');
	Route::post('/contactmail', 'FrontEnd\FrontEndController@contactUs')->name('frontend.contactmail');
	Route::get('/login', 'FrontEnd\FrontEndController@login')->name('frontend.login');
	Route::post('/do-login', 'FrontEnd\FrontEndController@doLogin')->name('frontend.do.login');
	Route::get('year/{type}', 'FrontEnd\FrontEndController@yearDbQuery')->name('frontend.year');
	Route::get('all/{type}', 'FrontEnd\FrontEndController@allDbQuery')->name('frontend.all');
	Route::get('month/{no}/{type}', 'FrontEnd\FrontEndController@monthDbQuery')->name('frontend.month');
	Route::get('/statistics', 'FrontEnd\FrontEndController@statistics')->name('frontend.statistics');
	Route::get('/term', function () {
		return view('frontend.term');
	})->name('term');

	Route::get('/policy', function () {
		return view('frontend.policy');
	});

	Route::get('/blog', 'FrontEnd\FrontEndController@blog')->name('frontend.blog');
	Route::post('/blog', 'FrontEnd\FrontEndController@blog')->name('search');

	Route::get('/blog-details/{id}', 'FrontEnd\FrontEndController@blog_details')->name('frontend.blog.details');

	Route::get('/contact', 'FrontEnd\FrontEndController@contact')->name('frontend.contact');
	Route::get('/work', 'FrontEnd\FrontEndController@work')->name('frontend.work');
	Route::get('/instructions', 'FrontEnd\FrontEndController@instructions')->name('frontend.instructions');

	Route::get('/register', 'FrontEnd\FrontEndController@register')->name('frontend.register');
	Route::post('/captcha', 'FrontEnd\FrontEndController@captcha')->name('frontend.captcha');
});

Route::get('/logout', 'FrontEnd\FrontEndController@logout')->name('frontend.logout');
Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('frontend.password.reset');

Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('frontend.password.email');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('frontend.password.reset.token');

Route::post('/password/reset', 'Auth\ResetPasswordController@reset');

Route::post('/newsletter', 'FrontEnd\DashboardController@newsLetter')->name('newsletter');

Route::group(['middleware' => ['auth', 'revalidate']], function () {

	Route::get('/dashboard', 'FrontEnd\DashboardController@index')->name('frontend.dashboard');
	Route::post('/update-profile', 'FrontEnd\DashboardController@updateProfile');
	Route::match(['get', 'post'], 'ajax-image-upload', 'FrontEnd\DashboardController@ajaxImage');
	Route::get('payment-status', array('as' => 'payment.status', 'uses' => 'PaymentController@paymentInfo'));
	Route::get('callback', array('as' => 'payment.callback', 'uses' => 'PaymentController@callback'));

	Route::get('payment-cancel', function () {
		return 'Payment has been canceled';
	})->name('payment.cancel');

	Route::get('paysera', 'PaymentController@paysera')->name('paysera');
});
