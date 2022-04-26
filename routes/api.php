<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController\JobController;
use App\Http\Controllers\ApiController\ContractorController;
use App\Http\Controllers\ApiController\GroupController;
use App\Http\Controllers\ApiController\PropertyController;
use App\Http\Controllers\ApiController\TenantController;
use App\Http\Controllers\ApiController\UserController;

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

// contractor registration

Route::apiResources([
       'contractor' => ContractorController::class,
]);
Route::group(['middleware'=>['auth:sanctum']],function(){

	// Route::apiResources([
 //       'contractor' => ContractorController::class,
 //    ]);

});