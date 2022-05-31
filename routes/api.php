<?php

use App\Http\Controllers\API\StudentController;

Route::get('students', [StudentController::class, 'index']);
Route::post('/add-student', [StudentController::class, 'store']);
Route::get('/edit-student/{id}', [StudentController::class, 'edit']);
Route::put('update-student/{id}', [StudentController::class, 'update']);
Route::delete('delete-student/{id}', [StudentController::class, 'destroy']);

Route::get('/users', function (Request $request) {
    $users = User::paginate(10);
    return $users;
});