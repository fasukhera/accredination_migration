<?php

use Illuminate\Support\Facades\Route;


Auth::routes();
//landing page
Route::get('/', 'CertificateController@landing')->name('landing');
//certificate
Route::get('/certification', 'CertificateController@index')->name('certificate');
//certificate details ADMIN
Route::get('/home', 'CertificateDetailsController@index')->name('home');
Route::post('/certificate_upload', 'CertificateDetailsController@store')->name('form_submit');
//accordion
Route::get('/accordion', 'CertificateDetailsAccordianController@index')->name('accordion');
Route::post('/accordion_upload', 'CertificateDetailsAccordianController@store')->name('accordion_submit');

//Route::get('/certification', function () {
//    return view('certificate');
//});

//mail
Route::get('send-mail', function () {
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];

    \Mail::to('fasukhera@gmail.com')->send(new \App\Mail\Enquire($details));

    dd("Email is Sent.");
});



