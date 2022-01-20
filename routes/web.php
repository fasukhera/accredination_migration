<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'accredination/admin'], function () {

    Auth::routes();

});

//landing page
Route::get('/', 'CertificateController@landing')->name('landing');
Route::get('/certification', 'CertificateController@index')->name('certificate');
Route::get('/pagelist', 'PageControllers\PageCertificateController@index')->name('page');
Route::group(['middleware' => 'auth'], function () {
//certificate client
    

//Certificate name add
    Route::get('/home', 'CertificateController@create')->name('home');
    Route::post('/add_new_certificate', 'CertificateController@store')->name('add_new_certificate');
//certificate details ADMIN
    Route::get('/certificate', 'CertificateDetailsController@index')->name('certificate_details');
     Route::post('/certificate_upload', 'CertificateDetailsController@store')->name('form_submit');
//accordion
    Route::get('/accordion', 'CertificateDetailsAccordianController@index')->name('accordion');
    Route::post('/accordion_upload', 'CertificateDetailsAccordianController@store')->name('accordion_submit');


//Page
    Route::get("/page", "PageControllers\PageCertificateController@create")->name("page");
    Route::post('/add_page', 'PageControllers\PageCertificateController@store')->name('add_page');

//PageDetails
    Route::get("/page_details", "PageControllers\PageCertificateDetailsController@index")->name("page_details");
    Route::post("/page_upload", "PageControllers\PageCertificateDetailsController@store")->name("form_submit");
}); 




Route::get('send-mail', function () {
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
    \Mail::to('fasukhera@gmail.com')->send(new \App\Mail\Enquire($details));
    dd("Email is Sent.");
});


