<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students-controller', [StudentController::class, 'index']);

Route::get('/student/{id}', function ($id) {
    return "Student ID: " . $id;
});

Route::put('/student/update', [StudentController::class, 'update']);

Route::get('/', function () {
    return "Welcome to Student System";
});

Route::get('/students', function () {
    $name = session('name');
    $output = "List of Students";
    if ($name) {
        $output .= "<br>Added: " . $name;
    }
    return $output;
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return "Admin Dashboard";
    });

    Route::get('/students', function () {
        return "Admin Student List";
    });
});

Route::get('/students-view', function () {
    return view('students');
});
