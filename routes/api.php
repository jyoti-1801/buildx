<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PasswordResetRequestController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\EstimatesController;
use App\Http\Controllers\FileController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


    Route::post('login', [ApiController::class, 'authenticate']);

    Route::post('register', [ApiController::class, 'register']);

    Route::post('sendEmail', [MailController::class, 'sendEmail']);


    Route::group(['middleware' => ['jwt.verify']], function() {

    Route::get('logout', [ApiController::class, 'logout']);

    Route::get('get_user', [ApiController::class, 'get_user']);

    Route::post('sendPasswordResetLink', [PasswordResetRequestController::class, 'sendEmail']);

    Route::post('reset_password', [ChangePasswordController::class, 'passwordResetProcess']);

    Route::get('schedule', [ScheduleController::class, 'index']);

    Route::get('schedule/{id}', [ScheduleController::class, 'show']);

    Route::post('schedule/store', [ScheduleController::class, 'store']);

    Route::put('update/{schedule}',  [ScheduleController::class, 'update']);

    Route::delete('delete/{schedule}',  [ScheduleController::class, 'destroy']);

    Route::get('search/{title}',  [ScheduleController::class, 'search']);

    Route::post('phase/store', [ScheduleController::class, 'phase_store']);

    Route::post('quote/store', [EstimatesController::class, 'quote_store']);

    Route::get('quote', [EstimatesController::class, 'quote_index']);

    Route::get('business', [EstimatesController::class, 'business_index']);

    Route::post('business/store', [EstimatesController::class, 'business_store']);

    Route::get('labour', [EstimatesController::class, 'labour_index']);

    Route::post('labour/store', [EstimatesController::class, 'labour_store']);

    Route::put('updateUser/{user}',  [ApiController::class, 'updateUser']);

    Route::get('users/invite', [EstimatesController::class, 'invite_view']);

    Route::post('users/invite', [EstimatesController::class, 'process_invites']);
    
    Route::get('document', [FileController::class, 'document_index']);
    
    Route::post('document/store', [FileController::class, 'document_store']);

    Route::get('photo', [FileController::class, 'photo_index']);
    
    Route::post('photo/store', [FileController::class, 'photo_store']);

    Route::delete('delete/{photo}',  [FileController::class, 'destroy']);

    Route::get('import_folder', [FileController::class, 'import_folder_index']);
    
    Route::post('import_folder/store', [FileController::class, 'import_folder_store']);

    Route::get('video', [FileController::class, 'video_index']);
    
    Route::post('video/store', [FileController::class, 'video_store']);
    
    //Route::post('sendPasswordResetLink', 'App\Http\Controllers\PasswordResetRequestController@sendEmail');

    //Route::post('resetPassword', 'App\Http\Controllers\ChangePasswordController@passwordResetProcess');
   
});


