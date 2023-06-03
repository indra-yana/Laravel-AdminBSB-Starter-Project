<?php

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

use App\Http\Controllers\Branch\BranchController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\User\PermissionController;
use App\Http\Controllers\User\RoleController;
use App\Http\Controllers\User\UserController;

Auth::routes();

Route::group(['prefix' => '/', 'middleware' => 'auth'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('home');
    Route::get('/home', [DashboardController::class, 'index'])->name('home.dashboard');
});

Route::group(['prefix' => 'branches', 'middleware' => 'auth'], function () {
    Route::get('/', [BranchController::class, 'index'])->name('branch.index');
    Route::get('create', [BranchController::class, 'create'])->name('branch.create');
    Route::post('store', [BranchController::class, 'store'])->name('branch.store');
    Route::get('{id}/edit', [BranchController::class, 'edit'])->name('branch.edit');
    Route::post('update', [BranchController::class, 'update'])->name('branch.update');
    Route::post('delete', [BranchController::class, 'delete'])->name('branch.delete');
    Route::get('dtIndex.json', [BranchController::class, 'dtIndex'])->name('branch.dtIndex');
});

Route::group(['prefix' => 'manage-user', 'middleware' => 'auth'], function () {
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', [UserController::class, 'index'])->name('user.index');
        Route::get('create', [UserController::class, 'create'])->name('user.create');
        Route::post('store', [UserController::class, 'store'])->name('user.store');
        Route::get('{id}/edit', [UserController::class, 'edit'])->name('user.edit');
        Route::post('update', [UserController::class, 'update'])->name('user.update');
        Route::post('delete', [UserController::class, 'delete'])->name('user.delete');
        Route::get('dtIndex.json', [UserController::class, 'dtIndex'])->name('user.dtIndex');
        Route::get('{id}/permission', [UserController::class, 'permission'])->name('user.permission');
        Route::post('store-permission', [UserController::class, 'storePermission'])->name('user.store.permission');
        Route::post('delete-permission', [UserController::class, 'deletePermission'])->name('user.delete.permission');
        Route::get('dtIndexPermission', [UserController::class, 'dtIndexPermission'])->name('user.dtIndex.permission');
        Route::get('{id}/role', [UserController::class, 'role'])->name('user.role');
        Route::post('store-role', [UserController::class, 'storeRole'])->name('user.store.role');
        Route::post('delete-role', [UserController::class, 'deleteRole'])->name('user.delete.role');
        Route::get('dtIndexRole', [UserController::class, 'dtIndexRole'])->name('user.dtIndex.role');
        Route::post('activate-or-inactivate', [UserController::class, 'activateOrInactivate'])->name('user.activateOrInactivate');
    });

    Route::group(['prefix' => 'permissions'], function () {
        Route::get('/', [PermissionController::class, 'index'])->name('permission.index');
        Route::get('create', [PermissionController::class, 'create'])->name('permission.create');
        Route::post('store', [PermissionController::class, 'store'])->name('permission.store');
        Route::get('{id}/edit', [PermissionController::class, 'edit'])->name('permission.edit');
        Route::post('update', [PermissionController::class, 'update'])->name('permission.update');
        Route::post('delete', [PermissionController::class, 'delete'])->name('permission.delete');
        Route::get('dtIndex', [PermissionController::class, 'dtIndex'])->name('permission.dtIndex');
    });

    Route::group(['prefix' => 'roles'], function () {
        Route::get('/', [RoleController::class, 'index'])->name('role.index');
        Route::get('create', [RoleController::class, 'create'])->name('role.create');
        Route::post('store', [RoleController::class, 'store'])->name('role.store');
        Route::get('{id}/edit', [RoleController::class, 'edit'])->name('role.edit');
        Route::post('update', [RoleController::class, 'update'])->name('role.update');
        Route::post('delete', [RoleController::class, 'delete'])->name('role.delete');
        Route::get('dtIndex', [RoleController::class, 'dtIndex'])->name('role.dtIndex');
    });
});