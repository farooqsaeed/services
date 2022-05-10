<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContractorController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\UserController;



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
Route::get('/farooq',[UserController::class,'index']);

Route::get('/', function () {
    return view('dashboard.dashboard');
});
// contractors
Route::resource('contractors', ContractorController::class);
Route::get('plumbers', [ContractorController::class,'plumbers']);



// jobs
Route::get('/openjobs', function () {
    return view('jobs.openjobs');
});
Route::resource('jobs', JobController::class);
// groups
Route::resource('groups', GroupController::class);

 
// events
Route::get('/eventsreports', function () {
    return view('events.events_reports');
});
Route::get('/events_complience', function () {
    return view('events.events_complience');
});

Route::get('/events', function () {
    return view('events.events_events');
});



// callout
Route::get('/callout', function () {
    return view('callout.callout');
});

// setting
Route::get('/setting', function () {
    return view('setting.enrolment');
});
Route::get('/autoforwarding', function () {
    return view('setting.autoforwarding');
});

Route::get('/contractorpriority', function () {
    return view('setting.contractorpriority');
});

Route::get('/companydetails', function () {
    return view('setting.companydetails');
});

Route::get('/autoresponder', function () {
    return view('setting.autoresponder');
});

Route::get('/generalenquiry', function () {
    return view('setting.generalenquiry');
});


Route::get('/propertycompliance', function () {
    return view('setting.propertycompliance');
});

Route::get('/contractorcompliance', function () {
    return view('setting.contractorcompliance');
});
 

Route::get('/licences', function () {
    return view('setting.licences');
});


// map view
Route::get('mapview', function () {
    return view('mapview.mapview');
});


