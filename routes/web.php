<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContractorController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\GaurdController;



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
    return view('login.login');
});

Route::get('/resetpassword', function () {
    return view('login.resetpassword');
});
Route::get('/resetpassword1', function () {
    return view('login.resetpassword1');
});

// middleware
Route::group(['middleware' => ['auth']], function () {
    // contractors
    Route::resource('contractors', ContractorController::class);
    Route::get('plumbers', [ContractorController::class, 'plumbers']);
    // jobs
    Route::get('/openjobs', function () {
        return view('jobs.openjobs');
    });
    Route::resource('jobs', JobController::class);
    Route::get('landlord', [JobController::class, 'landlord']);
    Route::get('landlord-approval/{id}', [JobController::class, 'update_landlord']);

    Route::delete('landlord/{id}', [JobController::class, 'destroylandlord']);
    Route::get('assignengineer', [JobController::class, 'assignengineer']);
    Route::post('fetch-sub', [JobController::class, 'fetchSub']);
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
    Route::resource('callout', GaurdController::class);
    Route::get('assign-property/{id}', [GaurdController::class, 'assign_property']);
    Route::post('store_call_property/{id}', [GaurdController::class, 'store_call_property']);

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
    // Property
    Route::resource('property', PropertyController::class);
    // groups
    Route::resource('groups', GroupController::class);
    // sub group
    Route::get('add-subgroups/{id}', [GroupController::class, 'subgroupcreate']);
    Route::post('store_subgroups', [GroupController::class, 'subgroupstore']);
    // child group
    Route::get('add_childgroups', [GroupController::class, 'childgroupcreate']);
    Route::post('store_childgroups', [GroupController::class, 'childgroupstore']);
    // tenants
    Route::resource('tenant', TenantController::class);
    Route::get('add-tproperty/{id}', [TenantController::class, 'createproperty']);
    Route::post('storeproperty', [TenantController::class, 'storeproperty']);
    Route::delete('delete-property/{id}', [TenantController::class, 'propertydestroy']);


    // user
    Route::resource('/user', UserController::class);
    Route::get('changepassword', [UserController::class, 'change_password']);
    Route::post('fetch-states', [UserController::class, 'fetchState']);
    Route::post('fetch-cities', [UserController::class, 'fetchCity']);
    
    // dashboard
    Route::get('/dashboard', function () {
        return view('dashboard.dashboard');
    });

});


Route::post('/signin', [UserController::class, 'signin']);
Route::post('/signout', [UserController::class, 'signout']);
