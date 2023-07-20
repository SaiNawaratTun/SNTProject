<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\Backend\PropertyTypeController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\CondoController;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $id =  Auth::user()->id;
    $profileData = User::find($id);
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/logout', [ProfileController::class, 'Logout'])->name('profile.logout');
    Route::post('/user/profile/store', [ProfileController::class, 'UserProfileStore'])->name('user.profile.store');
});

require __DIR__.'/auth.php';

    //Admin Middleware Group
Route::middleware(['auth','role:admin'])->group(function(){

    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');

    
});//End Admin Middleware Group


    //Agent Middleware Group
Route::middleware(['auth','role:agent'])->group(function(){

    Route::get('/agent/dashboard', [AgentController::class, 'AgentDashboard'])->name('agent.dashboard');

});//End Agent Middleware Group

Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');


    //Admin Group Middleware
Route::middleware(['auth','role:admin'])->group(function(){

    //Property Type of All Route
    Route::controller(PropertyTypeController::class)->group(Function(){
        Route::get('/all/type', 'AllType')->name('all.type');
        Route::get('/add/type', 'AddType')->name('add.type');
        Route::post('/store/type', 'StoreType')->name('store.type');
        Route::get('/edit/type/{id}', 'EditType')->name('edit.type');
        Route::post('/update/type', 'UpdateType')->name('update.type');
        Route::get('/delete/type/{id}', 'DeleteType')->name('delete.type');

    });

    //Amenities Type of All Route

    Route::controller(PropertyTypeController::class)->group(Function(){
        Route::get('/all/amenities', 'AllAmenities')->name('all.amenities');
        Route::get('/add/amenities', 'AddAmenities')->name('add.amenities');
        Route::post('/store/amenities', 'StoreAmenities')->name('store.amenities');
        Route::get('/edit/amenities/{id}', 'EditAmenities')->name('edit.amenities');
        Route::post('/update/amenities', 'UpdateAmenities')->name('update.amenities');
        Route::get('/delete/amenities/{id}', 'DeleteAmenities')->name('delete.amenities');
    
    });

    //Permission of All Route
    Route::controller(RoleController::class)->group(Function(){
        Route::get('/all/permission', 'AllPermission')->name('all.permission');
        Route::get('/add/permission', 'AddPermission')->name('add.permission');
        Route::post('/store/permission', 'StorePermission')->name('store.permission');
        Route::get('/edit/permission/{id}', 'EditPermission')->name('edit.permission');
        Route::post('/update/permission', 'UpdatePermission')->name('update.permission');
        Route::get('/delete/permission/{id}', 'DeletePermission')->name('delete.permission');

    });

        //Roles of All Route
        Route::controller(RoleController::class)->group(Function(){
            Route::get('/all/roles', 'AllRoles')->name('all.roles');
            Route::get('/add/roles', 'AddRoles')->name('add.roles');
            Route::post('/store/roles', 'StoreRoles')->name('store.roles');
            Route::get('/edit/roles/{id}', 'EditRoles')->name('edit.roles');
            Route::post('/update/roles', 'UpdateRoles')->name('update.roles');
            Route::get('/delete/roles/{id}', 'DeleteRoles')->name('delete.roles');

            Route::get('/add/roles/permission', 'AddRolesPermission')->name('add.roles.permission');
            Route::post('/role/permisssion/store', 'StoreRolesPermission')->name('role.permisssion.store');
            Route::get('/all/roles/permission', 'AllRolesPermission')->name('all.roles.permission');
            Route::get('/edit/roles/permission/{id}', 'EditRolesPermission')->name('edit.roles.permission');
            Route::post('/admin/roles/update/{id}', 'AdminRolesUpdate')->name('admin.role.update');
            Route::get('/admin/roles/delete/{id}', 'AdminRolesDelete')->name('admin.delete.roles');
    
        });

        //Condos of All Route
    Route::controller(CondoController::class)->group(Function(){
        Route::get('/all/condo', 'AllCondo')->name('all.condo');
        // Route::get('/amenities/condo', 'getAmenitiesByCondos')->name('amenities.by.condos');
        Route::get('/add/condo', 'AddCondo')->name('add.condo');
        Route::post('/store/condo', 'StoreCondo')->name('store.condo');
        Route::get('/edit/condo/{id}', 'EditCondo')->name('edit.condo');
        Route::post('/update/condo', 'UpdateCondo')->name('update.condo');
        Route::get('/delete/condo/{id}', 'DeleteCondo')->name('delete.condo');
        Route::get('/delete/image/{id}', 'DeleteImage')->name('image.delete');

    });

    
});//End Admin Middleware Group


Route::get('/services', [ProfileController::class, 'Services'])->name('layouts.services');