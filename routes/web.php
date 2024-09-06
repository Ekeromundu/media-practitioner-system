<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\MediaPractitionerController;
use App\Http\Controllers\PublicRelationsOfficerApprovalController;
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
    return view('welcome');
});

//Auth
Route::get('/auth/login' , [AuthController::class, 'login'])->name('login-form');
Route::post('/auth/login', [AuthController::class, 'Post_login'])->name('login_post'); // login process


Route::get('/auth/register', [AuthController::class, 'register']);

// Routes for the media practitioner
Route::get('/media-practitioners/register', [MediaPractitionerController::class, 'create'])->name('media_practitioners.create');
Route::post('/media-practitioners/register', [MediaPractitionerController::class, 'store'])->name('media_practitioners.store');
Route::get('/media-practitioners', [MediaPractitionerController::class, 'index'])->name('media_practitioners.index');
Route::get('/media-practitioners/single', [MediaPractitionerController::class, 'single'])->name('media_practitioners.single');


// routes for admin 

Route::get('/register/admin', [AuthController::class , 'createAdmin'])->name('create.admin');
Route::post('/register/admin', [AuthController::class , 'storeAdmin'])->name('store.admin');
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::post('/admin/approve/{id}', [AdminController::class, 'approve'])->name('admin.approve');
Route::post('/admin/reject/{id}', [AdminController::class, 'reject'])->name('admin.reject');


// feed back routes

Route::get('/feedback/{pro_id}/create', [FeedbackController::class, 'create'])->name('feedback.create');
Route::post('/feedback/{pro_id}', [FeedbackController::class, 'store'])->name('feedback.store');

// PROs
use App\Http\Controllers\PublicRelationsOfficerController;


Route::get('/public-relations-officers/register', [PublicRelationsOfficerController::class, 'create'])->name('public_relations_officers.create');
Route::post('/public-relations-officers/register', [PublicRelationsOfficerController::class, 'store'])->name('public_relations_officers.store');
Route::get('/public-relations-officers', [PublicRelationsOfficerController::class, 'index'])->name('public_relations_officers.index');
Route::get('/public-relations-officers/{id}', [PublicRelationsOfficerController::class, 'show'])->name('public_relations_officers.show');

// Admin

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/public-relations-officers/pending', [PublicRelationsOfficerApprovalController::class, 'index'])->name('admin.public_relations_officers.pending');
    Route::post('/public-relations-officers/{id}/approve', [PublicRelationsOfficerApprovalController::class, 'approve'])->name('admin.public_relations_officers.approve');
    Route::post('/public-relations-officers/{id}/reject', [PublicRelationsOfficerApprovalController::class, 'reject'])->name('admin.public_relations_officers.reject');
});

//feedback
Route::prefix('feedback')->group(function () {
    Route::get('/create', [FeedbackController::class, 'create']);
    Route::get('/show', [FeedbackController::class, 'show']);
});
