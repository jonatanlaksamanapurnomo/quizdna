<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('enroll');
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('tasks')->name('tasks/')->group(static function() {
            Route::get('/',                                             'TasksController@index')->name('index');
            Route::get('/create',                                       'TasksController@create')->name('create');
            Route::post('/',                                            'TasksController@store')->name('store');
            Route::get('/{task}/edit',                                  'TasksController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'TasksController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{task}',                                      'TasksController@update')->name('update');
            Route::delete('/{task}',                                    'TasksController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('quizzes')->name('quizzes/')->group(static function() {
            Route::get('/',                                             'QuizzesController@index')->name('index');
            Route::get('/create',                                       'QuizzesController@create')->name('create');
            Route::post('/',                                            'QuizzesController@store')->name('store');
            Route::get('/{quiz}/edit',                                  'QuizzesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'QuizzesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{quiz}',                                      'QuizzesController@update')->name('update');
            Route::delete('/{quiz}',                                    'QuizzesController@destroy')->name('destroy');
        });
    });
});