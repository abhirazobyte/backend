<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\FollowupController;

/*
|--------------------------------------------------------------------------
| CRM user portal (staff login, leads, followups)
| (from routes/route-copied-from-server/web.php)
|--------------------------------------------------------------------------
*/

Route::get('/user/login', [UserController::class, 'Login'])->name('user_login');
Route::post('/user/auth/check', [UserController::class, 'AuthCheck'])->name('user_auth_check');
Route::get('/user/auth/logout', [UserController::class, 'Logout'])->name('user_logout');

Route::middleware(['user'])->prefix('user')->group(function () {
    Route::get('dashboard', [UserController::class, 'Dashboard'])->name('user_dashboard');
    Route::any('active/lead', [LeadController::class, 'ActiveLead'])->name('active_lead');
    Route::get('inactive/lead', [LeadController::class, 'InActiveLead'])->name('inactive_lead');
    Route::get('archived/lead', [LeadController::class, 'ArchivedLead'])->name('archived_lead');
    Route::get('add/lead', [LeadController::class, 'AddLead'])->name('add_lead');
    Route::post('lead/submit', [LeadController::class, 'LeadSubmit'])->name('lead_submit');
    Route::post('update/planner', [FollowupController::class, 'UpdatePlanner'])->name('update_planner');
    Route::get('add/followup/{id}', [FollowupController::class, 'AddFollowup'])->name('add_followup');
    Route::post('add/followup/submit', [FollowupController::class, 'FollowupSubmit'])->name('followup_submit');
    Route::get('followup/list/{id}', [FollowupController::class, 'FollowupList'])->name('followup_list');
    Route::any('all/followup/list', [FollowupController::class, 'AllFollowupList'])->name('all_followup_list');
    Route::any('all/planner/list', [FollowupController::class, 'AllPlannerList'])->name('all_planner_list');
    Route::any('search/lead', [FollowupController::class, 'SearchLead'])->name('search_lead');
});
