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
use App\Http\Controllers\ComplianceController;


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

Route::get('/expirydate', [UserController::class, 'expirydate']);
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
    Route::put('update-status/{id}', [ContractorController::class, 'updateStatus']);
    Route::delete('delete-contractors', [ContractorController::class, 'delete_contractors']);
    Route::put('property-status/{id}', [PropertyController::class, 'updateStatus']);

    Route::get('assign-job/{id}', [ContractorController::class, 'assignJob'])->name('contractor.assign.job');
    Route::post('store-assign-job', [ContractorController::class, 'StoreAssignJob']);



    // jobs
    Route::resource('jobs', JobController::class);
    Route::get(
        'job/{id}',
        [JobController::class, 'create']
    );

    Route::get('landlord', [JobController::class, 'landlord']);
    Route::get('landlord-approval/{id}', [JobController::class, 'update_landlord']);
    Route::post('job-notes/{id}', [JobController::class, 'store_note']);
    Route::delete('landlord/{id}', [JobController::class, 'destroylandlord']);
    Route::get('assignengineer', [JobController::class, 'assignengineer']);
    Route::post('fetch-sub', [JobController::class, 'fetchSub']);


    Route::get('inprogress-job', [JobController::class, 'inprogressJob']);
    Route::get('resolved-job', [JobController::class, 'resolvedJob']);

    Route::get('closed-job', [JobController::class, 'closedJob']);


    Route::get('/openjobs', function () {
        return view('jobs.openjobs');
    });


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
        return view('setting.index');
    });
    Route::get('/enrolment', function () {
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
    Route::delete('delete-properties', [PropertyController::class, 'delete_proterties']);

    // compliance
    Route::get('electrical-check/{id}', [ComplianceController::class, 'electrical'])->name('electrical-check');
    Route::get('gas-check/{id}', [ComplianceController::class, 'gas'])->name('gas.check');
    Route::get('fire-check/{id}', [ComplianceController::class, 'fire'])->name('fire-check');
    Route::get('inspection-check/{id}', [ComplianceController::class, 'inspection'])->name('inspection-check');
    Route::get('energy-check/{id}', [ComplianceController::class, 'energy'])->name('energy-check');

    Route::post('compliance-store', [ComplianceController::class, 'complianceStore'])->name('compliance-store');

    // groups
    Route::resource('groups', GroupController::class);

    // sub group
    Route::get('add-subgroups/{id}', [GroupController::class, 'subgroupcreate']);
    Route::post('store_subgroups', [GroupController::class, 'subgroupstore']);
    Route::get('delete-subgroups/{id}', [GroupController::class, 'destroySubgroup']);

    // child group
    Route::get('add_childgroups/{id}', [GroupController::class, 'childgroupcreate']);
    Route::post('store_childgroups', [GroupController::class, 'childgroupstore']);

    // tenants
    Route::resource('tenant', TenantController::class);
    Route::get('add-tproperty/{id}', [TenantController::class, 'createproperty']);
    Route::post('storeproperty', [TenantController::class, 'storeproperty']);
    Route::delete('delete-property/{id}', [TenantController::class, 'propertydestroy']);
    Route::delete('delete-tenants', [TenantController::class, 'delete_tenants']);

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
