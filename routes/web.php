<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\ProjectController;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

Route::get('/', [OtherController::class, 'home'])->name('home');

Route::get('/home', [OtherController::class,'home'])->name('home');

Route::get('/contact', [OtherController::class,'contact'])->name('contact');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');
Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
Route::put('/projects/{project}', [ProjectController::class, 'update'])->name('projects.update');

Route::get('/checkerboard', [OtherController::class,'checkerboard'])->name('checkerboard');

Route::get('/courses', [CourseController::class,'index'])->name('courses');
Route::get('/courses/create', [CourseController::class,'create'])->name('courses.create');
Route::post('/courses', [CourseController::class,'store'])->name('courses.store');
Route::delete('/courses/{course}', [CourseController::class,'destroy'])->name('courses.destroy');
Route::get('/courses/{course}/edit', [CourseController::class, 'edit'])->name('courses.edit');
Route::put('/courses/{course}', [CourseController::class, 'update'])->name('courses.update');

Route::get('/lecturers', [LecturerController::class, 'index'])->name('lecturers');
Route::get('/lecturers/create', [LecturerController::class, 'create'])->name('lecturers.create');
Route::post('/lecturers', [LecturerController::class, 'store'])->name('lecturers.store');
Route::delete('/lecturers/{lecturer}', [LecturerController::class, 'destroy'])->name('lecturers.destroy');
Route::get('/lecturers/{lecturer}/edit', [LecturerController::class, 'edit'])->name('lecturers.edit');
Route::put('/lecturers/{lecturer}', [LecturerController::class, 'update'])->name('lecturers.update');

