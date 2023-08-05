<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources([
    'categories' => CategoryController::class,
    'posts' => PostController::class,
]);

/* Route::get('categories/index', [CategoryController::class, 'index']);
Route::get('categories/show/{id}', [CategoryController::class, 'show']); */

/* Route::get('posts/index', [PostController::class, 'index']);
Route::get('posts/show/{id}', [PostController::class, 'show']); */