<?php

use App\Http\Controllers\Admin\ACL\PermissionController;
use App\Http\Controllers\Admin\ACL\RoleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\KanbanController;
use App\Http\Controllers\Admin\OperationController;
use App\Http\Controllers\Admin\OrganizationController;
use App\Http\Controllers\Admin\StepController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\ToolController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['auth']], function () {
    Route::get('admin', [AdminController::class, 'index'])->name('admin.home');
    Route::prefix('admin')->name('admin.')->group(function () {
        /** Chart home */
        Route::get('/chart', [AdminController::class, 'chart'])->name('home.chart');

        /** Users */
        Route::get('/user/edit', [UserController::class, 'edit'])->name('user.edit');
        Route::resource('users', UserController::class);

        /** Tools */
        Route::resource('tools', ToolController::class);
        Route::delete('/tools/image-delete/{id}', [ToolController::class, 'imageDelete'])->name('tools-image-delete');
        Route::delete('/tools/file-delete/{id}', [ToolController::class, 'fileDelete'])->name('tools-file-delete');

        /** Teams */
        Route::resource('teams', TeamController::class);

        /** Operations */
        Route::get('/operations/timeline/{id}', [OperationController::class, 'timeline'])->name('operations.timeline');
        Route::resource('operations', OperationController::class);
        Route::delete('/operations/file-delete/{id}', [OperationController::class, 'fileDelete'])->name('operations-file-delete');

        /** Kanban */
        Route::get('/operations/kanban/{id}', [KanbanController::class, 'index'])->name('kanban.index');
        Route::post('kanban-ajax-update/{id}', [KanbanController::class, 'update'])->name('kanban.update');
        // Route::post('sales-funnel-search-seller', [KanbanController::class, 'index'])->name('sales-funnel.search-seller');
        // Route::post('sales-funnel-ajax-update', [SalesFunnelController::class, 'update'])->name('sales-funnel-ajax.update');
        // Route::delete('sales-funnel-ajax-destroy', [SalesFunnelController::class, 'destroy'])->name('sales-funnel-ajax.destroy');

        // Route::resource('kanban', KanbanController::class);

        /**
         * Settings
         */

        /** Organizations */
        Route::resource('organizations', OrganizationController::class);
        Route::resource('steps', StepController::class);

        /**
         * ACL
         */
        /** Permissions */
        Route::get('/permission/destroy/{id}', [PermissionController::class, 'destroy']);
        Route::resource('permission', PermissionController::class);
        /** Roles */
        Route::get('/role/destroy/{id}', [RoleController::class, 'destroy']);
        Route::get('role/{role}/permission', [RoleController::class, 'permissions'])->name('role.permissions');
        Route::put('role/{role}/permission/sync', [RoleController::class, 'permissionsSync'])->name('role.permissionsSync');
        Route::resource('role', RoleController::class);
    });
});

/** Web */
/** Home */
// Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/', function () {
    return redirect('admin');
});

Auth::routes([
    'register' => false,
]);

Route::fallback(function () {
    return view('admin.404');
});
