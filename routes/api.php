<?php
use App\Http\Controllers\StudentController;

use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('student/store', [StudentController::class, 'store']);
Route::get('student/list', [StudentController::class, 'list']);
Route::post('student/show', [StudentController::class, 'show']);
// Route::post('student/update', [StudentController::class, 'update']);
Route::post('student/delete', [StudentController::class, 'delete']);


