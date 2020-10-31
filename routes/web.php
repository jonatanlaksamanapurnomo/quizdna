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

Route::prefix('student')->name('student/')->group(static function () {
    Route::get('/signup', function () {
        return view('signup');
    });
    Route::get('/register', function () {
        return view('register');
    })->name('register');

    Route::get('/login', function () {
        return view('login');
    });

    Route::get('/authenticate', function () {
        return view('authenticate');
    });
    Route::get('/result', function () {
        return view('result');
    });

    Route::get('/dashboard', "ExamsCustomController@getDashboard");
    Route::post('/login/password', 'Admin\StudentsController@loginPassword');
    Route::post('/signup', 'Admin\StudentsController@signup');
    Route::Post("/save", "TypingDna@save")->name("save");
    Route::Post("/verify", "TypingDna@verify")->name("verify");
    Route::Post("/match", "TypingDna@match")->name("match");
    Route::post("/join", 'ExamsCustomController@join')->name("join");
    Route::post("/join/exam/{exam_code}", 'ExamsCustomController@getExamRoom')->name("join-room");
//    Route::get("/join/exam/{exam_code}", 'ExamsCustomController@getExamRoom')->name("join-room");

    Route::post('/answer', 'AnswerEditorController@insertAnswer')->name('answer');
});

//Route::get('/enroll', function () { return view('enroll'); });
//
//
Route::get('/', function () {
    return redirect("/student/login");
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function () {
        Route::prefix('admin-users')->name('admin-users/')->group(static function () {
            Route::get('/', 'AdminUsersController@index')->name('index');
            Route::get('/create', 'AdminUsersController@create')->name('create');
            Route::post('/', 'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login', 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit', 'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}', 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}', 'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation', 'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function () {
        Route::get('/profile', 'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile', 'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password', 'ProfileController@editPassword')->name('edit-password');
        Route::post('/password', 'ProfileController@updatePassword')->name('update-password');
    });
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function () {
        Route::prefix('tasks')->name('tasks/')->group(static function () {
            Route::get('/', 'TasksController@index')->name('index');
            Route::get('/create', 'TasksController@create')->name('create');
            Route::post('/', 'TasksController@store')->name('store');
            Route::get('/{task}/edit', 'TasksController@edit')->name('edit');
            Route::post('/bulk-destroy', 'TasksController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{task}', 'TasksController@update')->name('update');
            Route::delete('/{task}', 'TasksController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function () {
        Route::prefix('quizzes')->name('quizzes/')->group(static function () {
            Route::get('/', 'QuizzesController@index')->name('index');
            Route::get('/create', 'QuizzesController@create')->name('create');
            Route::post('/', 'QuizzesController@store')->name('store');
            Route::get('/{quiz}/edit', 'QuizzesController@edit')->name('edit');
            Route::post('/bulk-destroy', 'QuizzesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{quiz}', 'QuizzesController@update')->name('update');
            Route::delete('/{quiz}', 'QuizzesController@destroy')->name('destroy');
        });
    });
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function () {
        Route::prefix('exams')->name('exams/')->group(static function () {
            Route::get('/', 'ExamsController@index')->name('index');
            Route::get('/create', 'ExamsController@create')->name('create');
            Route::post('/', 'ExamsController@store')->name('store');
            Route::get('/{exam}/edit', 'ExamsController@edit')->name('edit');
            Route::post('/bulk-destroy', 'ExamsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{exam}', 'ExamsController@update')->name('update');
            Route::delete('/{exam}', 'ExamsController@destroy')->name('destroy');
        });
    });
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function () {
        Route::prefix('exams')->name('exams/')->group(static function () {
            Route::get('/', 'ExamsController@index')->name('index');
            Route::get('/create', 'ExamsController@create')->name('create');
            Route::post('/', 'ExamsController@store')->name('store');
            Route::get('/{exam}/edit', 'ExamsController@edit')->name('edit');
            Route::post('/bulk-destroy', 'ExamsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{exam}', 'ExamsController@update')->name('update');
            Route::delete('/{exam}', 'ExamsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function () {
        Route::prefix('questions')->name('questions/')->group(static function () {
            Route::get('/', 'QuestionsController@index')->name('index');
            Route::get('/create/{id}', 'QuestionsController@create')->name('create');
            Route::post('/', 'QuestionsController@store')->name('store');
            Route::get('/{question}/edit', 'QuestionsController@edit')->name('edit');
            Route::post('/bulk-destroy', 'QuestionsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{question}', 'QuestionsController@update')->name('update');
            Route::delete('/{question}', 'QuestionsController@destroy')->name('destroy');
        });
    });
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function () {
        Route::prefix('exams')->name('exams/')->group(static function () {
            Route::get('/', 'ExamsController@index')->name('index');
            Route::get('/create', 'ExamsController@create')->name('create');
            Route::post('/', 'ExamsController@store')->name('store');
            Route::get('/{exam}/edit', 'ExamsController@edit')->name('edit');
            Route::post('/bulk-destroy', 'ExamsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{exam}', 'ExamsController@update')->name('update');
            Route::delete('/{exam}', 'ExamsController@destroy')->name('destroy');
        });
    });
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function () {
        Route::prefix('students')->name('students/')->group(static function () {
            Route::get('/', 'StudentsController@index')->name('index');
            Route::get('/create', 'StudentsController@create')->name('create');
            Route::post('/', 'StudentsController@store')->name('store');
            Route::get('/{student}/edit', 'StudentsController@edit')->name('edit');
            Route::post('/bulk-destroy', 'StudentsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{student}', 'StudentsController@update')->name('update');
            Route::delete('/{student}', 'StudentsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function () {
        Route::prefix('students')->name('students/')->group(static function () {
            Route::get('/', 'StudentsController@index')->name('index');
            Route::get('/create', 'StudentsController@create')->name('create');
            Route::post('/', 'StudentsController@store')->name('store');
            Route::get('/{student}/edit', 'StudentsController@edit')->name('edit');
            Route::post('/bulk-destroy', 'StudentsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{student}', 'StudentsController@update')->name('update');
            Route::delete('/{student}', 'StudentsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function () {
        Route::prefix('answers')->name('answers/')->group(static function () {
            Route::get('/', 'AnswersController@index')->name('index');
            Route::get('/create', 'AnswersController@create')->name('create');
            Route::post('/', 'AnswersController@store')->name('store');
            Route::get('/{answer}/edit', 'AnswersController@edit')->name('edit');
            Route::post('/bulk-destroy', 'AnswersController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{answer}', 'AnswersController@update')->name('update');
            Route::delete('/{answer}', 'AnswersController@destroy')->name('destroy');
        });
    });
});
Route::post('admin/edit/{answer}', 'AnswerEditorController@editAnswer')->name('edit-answer');


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function () {
        Route::prefix('attempts')->name('attempts/')->group(static function () {
            Route::get('/', 'AttemptController@index')->name('index');
            Route::get('/create', 'AttemptController@create')->name('create');
            Route::post('/', 'AttemptController@store')->name('store');
            Route::get('/{attempt}/edit', 'AttemptController@edit')->name('edit');
            Route::post('/bulk-destroy', 'AttemptController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{attempt}', 'AttemptController@update')->name('update');
            Route::delete('/{attempt}', 'AttemptController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function () {
        Route::prefix('attempts')->name('attempts/')->group(static function () {
            Route::get('/', 'AttemptsController@index')->name('index');
            Route::get('/create', 'AttemptsController@create')->name('create');
            Route::post('/', 'AttemptsController@store')->name('store');
            Route::get('/{attempt}/edit', 'AttemptsController@edit')->name('edit');
            Route::post('/bulk-destroy', 'AttemptsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{attempt}', 'AttemptsController@update')->name('update');
            Route::delete('/{attempt}', 'AttemptsController@destroy')->name('destroy');
        });
    });
});
