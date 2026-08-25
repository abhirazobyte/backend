<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ThesunvillageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\HomeSliderController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LanguageDetailController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ContentTypeController;
use App\Http\Controllers\AffiliationController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\DefaultController;
use App\Http\Controllers\ProgramQueryController;
use App\Http\Controllers\PeopleQueryController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FollowupController;
use App\Http\Controllers\LeadController;

/*
|--------------------------------------------------------------------------
| Admin panel & auth (from routes/route-copied-from-server/web.php)
|--------------------------------------------------------------------------
*/

Route::post('/auth/save', [AdminController::class, 'save'])->name('auth.save');
Route::post('/auth/check', [AdminController::class, 'check'])->name('auth.check');
Route::get('/auth/logout', [AdminController::class, 'logout'])->name('auth.logout');

Route::middleware(['AuthCheck'])->group(function () {
    Route::get('/auth/login', [AdminController::class, 'login'])->name('auth.login');
    Route::get('/auth/register', [AdminController::class, 'register'])->name('auth.register');

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::resource('/admin/thesunvillage', ThesunvillageController::class);
    Route::resource('/admin/page', PageController::class);
    Route::resource('/admin/setting', SettingController::class);


    Route::resource('/admin/home-slider', HomeSliderController::class);
    Route::resource('/admin/language', LanguageController::class);
    Route::resource('/admin/language-detail', LanguageDetailController::class);
    Route::get('/admin/language-page/{id}', [LanguageDetailController::class, 'detail'])->name('detail');

    Route::resource('/admin/content', ContentController::class);
    Route::resource('/admin/content-type', ContentTypeController::class);
    Route::resource('/admin/affiliation', AffiliationController::class);
    Route::resource('/admin/exam', ExamController::class);

    Route::resource('/admin/gallery', GalleryController::class);
    Route::resource('/admin/client', ClientController::class);
    Route::resource('/admin/review', ReviewController::class);
    Route::resource('/admin/blog', BlogController::class);
    Route::resource('/admin/files', FileController::class);

    Route::get('/admin/career-enquiry', [DefaultController::class, 'careerEnquiryLead'])->name('careerEnquiryLead');
    Route::get('/admin/lead-enquiry', [DefaultController::class, 'getEnquiryLead'])->name('getEnquiryLead');
    Route::get('/admin/course-enquiry', [DefaultController::class, 'courseEnquiryLead'])->name('courseEnquiryLead');

    Route::resource('/admin/program-app', ProgramQueryController::class);
    Route::resource('/admin/people-query', PeopleQueryController::class);
    Route::resource('/admin/certificate', CertificateController::class);

    Route::get('/admin/users', [UserController::class, 'Index'])->name('user_list');
    Route::get('/admin/create/user', [UserController::class, 'UserCreate'])->name('user_create');
    Route::post('/admin/user/submit', [UserController::class, 'UserSubmit'])->name('submit_user');
    Route::get('/admin/user/edit/{id}', [UserController::class, 'UserEdit'])->name('edit_user');
    Route::post('admin/user/update', [UserController::class, 'UserUpdate'])->name('update_user');
    Route::get('/admin/user/delete/{id}', [UserController::class, 'UserDelete'])->name('delete_user');

    Route::any('admin/followup/list', [FollowupController::class, 'AdminFollowupList'])->name('admin_followup_list');
    Route::any('admin/planner/list', [FollowupController::class, 'AdminPlannerList'])->name('admin_planner_list');
    Route::any('/admin/assign/lead', [LeadController::class, 'AssignLead'])->name('admin_assign_lead');
    Route::post('/admin/assign/lead/submit', [LeadController::class, 'AssignLeadSubmit'])->name('admin_assign_lead_submit');
    Route::any('/admin/transfer/lead', [LeadController::class, 'TransferLead'])->name('admin_transfer_lead');
    Route::post('/admin/transfer/lead/to/user', [LeadController::class, 'TransferLeadTo'])->name('admin_lead_transfer_to');
});


// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AdminController;
// use App\Http\Controllers\ThesunvillageController;
// use App\Http\Controllers\PageController;
// use App\Http\Controllers\SettingController;
// use App\Http\Controllers\HomeSliderController;
// use App\Http\Controllers\LanguageController;
// use App\Http\Controllers\LanguageDetailController;
// use App\Http\Controllers\ContentController;
// use App\Http\Controllers\ContentTypeController;
// use App\Http\Controllers\AffiliationController;
// use App\Http\Controllers\ExamController;
// use App\Http\Controllers\GalleryController;
// use App\Http\Controllers\ClientController;
// use App\Http\Controllers\ReviewController;
// use App\Http\Controllers\BlogController;
// use App\Http\Controllers\FileController;
// use App\Http\Controllers\DefaultController;
// use App\Http\Controllers\ProgramQueryController;
// use App\Http\Controllers\PeopleQueryController;
// use App\Http\Controllers\CertificateController;
// use App\Http\Controllers\UserController;
// use App\Http\Controllers\FollowupController;
// use App\Http\Controllers\LeadController;

// /*
// |--------------------------------------------------------------------------
// | Admin panel & auth (Blade CMS under resources/views/backend)
// |--------------------------------------------------------------------------
// */

// Route::post('/auth/save', [AdminController::class, 'save'])->name('auth.save');
// Route::post('/auth/check', [AdminController::class, 'check'])->name('auth.check');
// Route::get('/auth/logout', [AdminController::class, 'logout'])->name('auth.logout');

// Route::middleware(['AuthCheck'])->group(function () {
//     Route::get('/auth/login', [AdminController::class, 'login'])->name('auth.login');
//     Route::get('/auth/register', [AdminController::class, 'register'])->name('auth.register');

//     Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

//     Route::resource('/admin/thesunvillage', ThesunvillageController::class);
//     Route::resource('/admin/page', PageController::class);
//     Route::resource('/admin/setting', SettingController::class);

//     Route::resource('/admin/home-slider', HomeSliderController::class);
//     Route::resource('/admin/language', LanguageController::class);
//     Route::resource('/admin/language-detail', LanguageDetailController::class);
//     Route::get('/admin/language-page/{id}', [LanguageDetailController::class, 'detail'])->name('detail');

//     Route::resource('/admin/content', ContentController::class);
//     Route::resource('/admin/content-type', ContentTypeController::class);
//     Route::resource('/admin/affiliation', AffiliationController::class);
//     Route::resource('/admin/exam', ExamController::class);

//     Route::resource('/admin/gallery', GalleryController::class);
//     Route::resource('/admin/client', ClientController::class);
//     Route::resource('/admin/review', ReviewController::class);
//     Route::resource('/admin/blog', BlogController::class);
//     Route::resource('/admin/files', FileController::class);

//     Route::get('/admin/career-enquiry', [DefaultController::class, 'careerEnquiryLead'])->name('careerEnquiryLead');
//     Route::get('/admin/lead-enquiry', [DefaultController::class, 'getEnquiryLead'])->name('getEnquiryLead');
//     Route::get('/admin/course-enquiry', [DefaultController::class, 'courseEnquiryLead'])->name('courseEnquiryLead');

//     Route::resource('/admin/program-app', ProgramQueryController::class);
//     Route::resource('/admin/people-query', PeopleQueryController::class);
//     Route::resource('/admin/certificate', CertificateController::class);

//     // Users (CRM staff accounts)
//     Route::get('/admin/user-list', [UserController::class, 'Index'])->name('user_list');
//     Route::get('/admin/user-create', [UserController::class, 'UserCreate'])->name('user_create');
//     Route::post('/admin/user-submit', [UserController::class, 'UserSubmit'])->name('submit_user');
//     Route::get('/admin/user-edit/{id}', [UserController::class, 'UserEdit'])->name('edit_user');
//     Route::post('/admin/user-update', [UserController::class, 'UserUpdate'])->name('update_user');
//     Route::get('/admin/user-delete/{id}', [UserController::class, 'UserDelete'])->name('delete_user');

//     // Followups & lead assignment
//     Route::match(['get', 'post'], '/admin/followup-list', [FollowupController::class, 'AdminFollowupList'])
//         ->name('admin_followup_list');
//     Route::match(['get', 'post'], '/admin/planner-list', [FollowupController::class, 'AdminPlannerList'])
//         ->name('admin_planner_list');
//     Route::match(['get', 'post'], '/admin/assign-lead', [LeadController::class, 'AssignLead'])
//         ->name('admin_assign_lead');
//     Route::post('/admin/assign-lead-submit', [LeadController::class, 'AssignLeadSubmit'])
//         ->name('admin_assign_lead_submit');
//     Route::match(['get', 'post'], '/admin/transfer-lead', [LeadController::class, 'TransferLead'])
//         ->name('admin_transfer_lead');
//     Route::post('/admin/transfer-lead-submit', [LeadController::class, 'TransferLeadTo'])
//         ->name('admin_lead_transfer_to');
// });
