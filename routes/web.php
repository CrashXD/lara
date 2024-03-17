<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo '<h1 style="color: red;">hello</h1>';
});

Route::get('/about', function () {
    echo '<h1 style="color: red;">About</h1>';
});

Route::get('custom', [TestController::class, 'hello']);

// Route::get('/contacts', function () {
//     echo 'get';
// });

// Route::post('/contacts', function () {
//     echo 'post';
// });

// Route::delete('/contacts', function () {
//     echo 'delete';
// });

Route::match(['get', 'post'], 'contacts', function () {
    echo 'Hello';
});