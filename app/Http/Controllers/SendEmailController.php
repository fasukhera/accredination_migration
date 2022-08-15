<?php

namespace App\Http\Controllers;

use App\PageApp\PageMembership;
use App\PageApp\PageCertificate;
use App\PageApp\PageCertificateDetails;
use App\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    function index()
    {
        $data['certificates'] = Certificate::with('certificate_details')->orderby('name','ASC')->get();
        
        $membership = PageMembership::with('page_details')->get();

        
        return view('send_email', compact('data','membership'));
    }

    function send(Request $request)
    {
     $this->validate($request, [
      'name'     =>  'required',
      'email'  =>  'required|email',
      'message' =>  'required'
     ]);

        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message
        );

     Mail::to('web-tutorial@programmer.net')->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');

    }
}
