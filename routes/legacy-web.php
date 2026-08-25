<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\DefaultController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\RazorpayPaymentController;
use App\Http\Controllers\PdfController;

/*
|--------------------------------------------------------------------------
| Legacy utilities & form POST endpoints
| (from routes/route-copied-from-server/web.php — not Blade frontend GETs)
|--------------------------------------------------------------------------
*/

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('optimize:clear');

    return redirect('https://langmainternational.com');
});

Route::get('/version', function () {
    return view('welcome');
});

Route::get('verifyzoom', function () {
    return view('verifyzoom.verifyzoom');
});

Route::get('/pdfview', [PdfController::class, 'pdfview'])->name('pdfview');

// Lead & enquiry forms
Route::post('/leads', [ProgramController::class, 'leads'])->name('leads');
Route::post('/apply-submit', [ProgramController::class, 'applySubmit'])->name('applySubmit');
Route::post('/enquireleads', [DefaultController::class, 'enquireleads'])->name('enquireleads');
Route::post('/contact-lead', [ContactController::class, 'contactlead'])->name('contactlead');
Route::post('/courses-lead', [ContactController::class, 'courseslead'])->name('courseslead');
Route::post('/program-lead', [ProgramController::class, 'programLead'])->name('programLead');
Route::post('/career-enquiry', [DefaultController::class, 'careerEnquiry'])->name('careerEnquiry');
Route::post('/lead', [DefaultController::class, 'leadEnquiry'])->name('leadEnquiry');
Route::post('/contact-form', [ContactController::class, 'contactform'])->name('contactform');
Route::post('/search', [DefaultController::class, 'blogSearch'])->name('blogSearch');
Route::post('/russian-enquiry', [DefaultController::class, 'russianEnquiry'])->name('russianEnquiry');
Route::post('/french-enquiry', [DefaultController::class, 'frenchEnquiry'])->name('frenchEnquiry');
Route::post('/signup', [SignupController::class, 'signup'])->name('signup');
Route::post('/signup', [SignupController::class, 'signupEnquiry'])->name('signupEnquiry');

// Certificate & payment
Route::get('/certificate', [CertificateController::class, 'certificate'])->name('certificate');
Route::post('/certificate', [CertificateController::class, 'certificateEnquiry'])->name('certificateEnquiry');
Route::get('/payment', [RazorpayPaymentController::class, 'index']);
Route::post('/payment', [RazorpayPaymentController::class, 'store'])->name('payment');

// Thank-you pages (redirect targets from legacy forms)
Route::get('/thank-you-form', [ContactController::class, 'thank_you_form'])->name('thank-you-form');
Route::get('/thank-you', [DefaultController::class, 'thank_you'])->name('thank-you');
Route::get('/thank-you-certi', [DefaultController::class, 'thank_you_certi'])->name('thank-you-certi');
