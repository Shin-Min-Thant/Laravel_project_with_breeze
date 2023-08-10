<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\backend\ContentController;
use App\Http\Controllers\backend\ManageAdminController;
use App\Http\Controllers\backend\PermissionController;
use App\Http\Controllers\backend\PropertyTypeController;
use App\Http\Controllers\backend\RoleController;
use App\Http\Controllers\backend\RolePermissionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Tests\Integration\Routing\Middleware;

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
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Admin
Route::middleware(['auth','roles:admin'])->group(function(){
Route::get('/admin/dashboard',[AdminController::class,'AdminDashboard'])->name('admin.dashbord');
Route::get('/admin/logout',[AdminController::class,'AdminLogout'])->name('admin.logout');
Route::get('/admin/profile',[AdminController::class,'AdminProfile'])->name('admin.profile');
Route::post('/admin/profile/store',[AdminController::class,'AdminProfileStore'])->name('admin.profile.store');
Route::get('/admin/change/password',[AdminController::class,'AdminChangePassword'])->name('admin.change.password');
Route::post('/admin/update/password',[AdminController::class,'AdminUpdatePassword'])->name('admin.update.password');
});
// End Admin
Route::get('/admin/login',[AdminController::class,'AdminLogin'])->name('admin.login');


// Agent
Route::middleware(['auth','roles:agent'])->group(function(){
Route::get('/agent/dashboard',[AgentController::class,'AgentDashboard'])->name('agent.dashboard');

});



// Admin Property
Route::middleware(['auth','roles:admin'])->group(function(){

    // Property Controller
    Route::controller(PropertyTypeController::class)->group(function(){
        Route::get('all/type','AllType')->name('all.type');
        Route::get('add/type','AddType')->name('add.type');
        Route::post('restore/type','RestoreType')->name('restore.type');
        Route::get('edit/type/{id}','EditType')->name('edit.type');
        Route::post('update/type','UpdateType')->name('update.type');
        Route::get('delete/type/{id}','DeleteType')->name('delete.type');
    });

    // Content Controller
    Route::controller(ContentController::class)->group(function(){
        Route::get('all/content','AllContent')->name('all.content');
        Route::get('add/content','AddContent')->name('add.content');
        Route::post('restore/content','ResotreContent')->name('restore.content');
        Route::get('edit/content/{id}','EditContent')->name('edit.content');
        Route::post('update/content','UpdateContent')->name('update.content');
        Route::get('delete/content/{id}','DeleteContent')->name('delete.content');
    });

    // Permission Controller
    Route::controller(PermissionController::class)->group(function(){
        Route::get('all/permission','AllContent')->name('all.permission');
        Route::get('add/permission','AddPermission')->name('add.permission');
        Route::post('restore/permission','ResotrePermission')->name('restore.permission');
        Route::get('edit/permission/{id}','EditPermission')->name('edit.permission');
        Route::post('update/permission','UpdatePermission')->name('update.permission');
        Route::get('delete/permission/{id}','DeletePermission')->name('delete.permission');
    });

    // Role Controller
    Route::controller(RoleController::class)->group(function(){
        Route::get('all/roles','AllRoles')->name('all.roles');
        Route::get('add/role','AddRole')->name('add.role');
        Route::post('restore/role','ResotreRole')->name('restore.role');
        Route::get('edit/role/{id}','EditRole')->name('edit.role');
        Route::post('update/role','UpdateRole')->name('update.role');
        Route::get('delete/role/{id}','DeleteRole')->name('delete.role');
    });

    Route::controller(RolePermissionController::class)->group(function(){
        Route::get('add/roles/permission','AddRolePermission')->name('add.roles.permission');
        Route::get('all/roles/permission','AllRolePermission')->name('all.roles.permission');
        Route::post('store/roles/permission','StoreRolePermission')->name('store.roles.permission');
        Route::get('edit/role/permission/{id}','EditRolePermission')->name('admin.edit.permission');
        Route::post('update/role/permission/{id}','UpdateRolePermission')->name('admin.update.permission');
        Route::get('delete/role/permission/{id}','DeleteRolePermission')->name('admin.delete.permission');
    });

    Route::controller(ManageAdminController::class)->group(function(){
        Route::get('all/admin',"allAdmin")->name('all.admin');
        Route::get('add/admin',"addAmin")->name('add.admin');
        Route::post('store/admin',"storeAdmin")->name('store.admin');
        Route::get('edit/admin/{id}',"editAdmin")->name('admin.edit');
        Route::post('update/admin/{id}',"updateAdmin")->name('update.admin');
        Route::get('delete/admin/{id}',"deleteAdmin")->name('admin.delete');
    });


});



// End Admin


