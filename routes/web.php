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
/*
Route::get('/', function () {
    return view('home');
});*/

Route::get('/login', [App\Http\Controllers\FrontendController::class, 'login'])->name('login');

Route::post('/login', [App\Http\Controllers\FrontendController::class, 'loginStore'])->name('login.store');

Route::get('/home', [App\Http\Controllers\FrontendController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('home');

Route::get('/contact-us', [App\Http\Controllers\FrontendController::class, 'contact'])->name('contact');

Route::get('estimate-desktop', [App\Http\Controllers\front\EstimateController::class, 'index'])->name('estimate-desktop');

Route::get('logout', [App\Http\Controllers\FrontendController::class, 'logout'])->name('logout');

Route::post('logout', [App\Http\Controllers\FrontendController::class, 'logout'])->name('logout');

Route::get('documents', [App\Http\Controllers\front\DocumentController::class, 'index'])->name('documents');

Route::get('photos', [App\Http\Controllers\front\PhotoController::class, 'index'])->name('photos');

Route::get('videos', [App\Http\Controllers\front\VideoController::class, 'index'])->name('videos');


Route::get('schedule-demo', [App\Http\Controllers\front\ScheduleController::class, 'index'])->name('schedule-demo');

Route::post('schedule-demo', [App\Http\Controllers\front\ScheduleController::class, 'demoStore'])->name('schedule-demo-store');


Route::post('documents', [App\Http\Controllers\front\DocumentController::class, 'document_store'])->name('document.folder.store');

 Route::get('document/delete', [App\Http\Controllers\front\DocumentController::class, 'destroy'])->name('documents.delete');
 
 Route::get('document/view', [App\Http\Controllers\front\DocumentController::class, 'documentFolderView'])->name('documents.view');

 //Route::get('purchased-download', [App\Http\Controllers\front\DocumentController::class, 'download'])->name('purchased.download');

 Route::get('download-zip', [App\Http\Controllers\front\DocumentController::class, "downloadZip"])->name('purchased.download');
 
 Route::get('all-documents-delete', [App\Http\Controllers\front\DocumentController::class, "delete"])->name('all-documents.delete');

 Route::get('estimate', [App\Http\Controllers\front\EstimateController::class, 'estimate'])->name('estimate');
 
 Route::post('estimate-store', [App\Http\Controllers\front\EstimateController::class, 'estimate_store'])->name('estimate.store');

//Route::get('estimate/edit/{id}',  [App\Http\Controllers\front\EstimateController::class, 'estimate_edit'])->name('estimate.edit');
Route::put('estimate/update/{id}',  [App\Http\Controllers\front\EstimateController::class, 'estimate_update'])->name('estimate.update');


Route::post('photos', [App\Http\Controllers\front\PhotoController::class, 'photo_store'])->name('photo.folder.store');

 Route::get('photos/delete', [App\Http\Controllers\front\PhotoController::class, 'destroy'])->name('photos.delete');
 
 Route::get('photos/view', [App\Http\Controllers\front\PhotoController::class, 'photoFolderView'])->name('photos.view');


 Route::post('videos', [App\Http\Controllers\front\VideoController::class, 'video_store'])->name('video.folder.store');

 Route::get('videos/delete', [App\Http\Controllers\front\VideoController::class, 'destroy'])->name('videos.delete');
 
 Route::get('videos/view', [App\Http\Controllers\front\VideoController::class, 'videoFolderView'])->name('videos.view');