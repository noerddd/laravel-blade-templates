<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/contact', function () {
    return view('contact', ['name' => 'noer dafiq', 'email' => 'dafiqmohamad@gmail.com', 'phone' => '085649188404']);
});

Route::redirect('/contact', '/contact-us');

Route::get('/products/{id}', function ($id) {
    return 'ini adalah product dengan id ' . $id;
});


Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        return 'ini adalah halaman user';
    });
    Route::get('/products', function () {
        return 'ini adalah halaman product';
    });
    Route::get('/profil-admin', function () {
        return 'ini adalah halaman profil admin';
    });
    Route::get('/setting', function () {
        return 'ini adalah halaman setting';
    });
    Route::get('/dashboard', function () {
        return 'ini adalah halaman dashboard';
    });
});
*/

Route::get('/', function () {
    return view('home', [
        'name' => 'noer dafiq',
        'role' => 'admin',
        'tugas' => [
            'matkul' => ['Pemrograman Web', 'Pemrograman Mobile', 'Pemrograman Desktop', 'Pemrograman IOT', 'Pemrograman AI', 'Pemrograman AI'],
            'nilai' => [90, 80, 70, 60, 50, 40]
        ]
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact', ['name' => 'noer dafiq', 'email' => 'dafiqmohamad@gmail.com', 'phone' => '085649188404']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dashboard2', function () {
    return view('dashboard2');
});


Route::get('/dashboard3', function () {
    return view('dashboard3');
});
