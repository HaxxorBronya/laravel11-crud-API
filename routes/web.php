<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'Welcome' => 'Laravel RESTful API',
        'Data Posts' => 'http://localhost:8000/api/posts',
    ]);
});
