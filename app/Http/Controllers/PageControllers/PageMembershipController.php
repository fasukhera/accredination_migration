<?php

namespace App\Http\Controllers\PageControllers;

use App\PageApp\PageMembership;
use App\PageApp\PageMembershipDetails;
use App\EmailHistory;
use App\Certificate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class PageMembershipController extends PageController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function landing()
    {
        $data['certificates'] = Certificate::with('certificate_details')->orderby('name', 'ASC')->get();
        $certificates = $data['certificates'];
        $membership = PageMembership::with('membership_details')->get();

        return view('welcome', compact('data', 'certificates', 'membership'));
    }

    public function bcs_pk()
    {
        return view('bcs_pk');
    }

    public function submit_membership(Request $request)
    {
        $data = $request->except(['_token']);
        $data['subject'] = "subject";
        EmailHistory::create($data);
        $user = ['email'=>$request->email, 'first_name'=>$request->first_name, 'last_name' => $request->last_name, 'phone'=>$request->phone, 'message'=>$request->message];
        //Mail::to('test@mail.com')->send(new SendContatEmail($user));
        require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions
 
        try {
 
            // Email server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';             //  smtp host
            $mail->SMTPAuth = true;
            $mail->Username = 'info@bcspakistan.org';   //  sender username
            $mail->Password = 'kncxnsbkwvqrslsy';       // sender password
            $mail->SMTPSecure = 'tls';                  // encryption - ssl/tls
            $mail->Port = 587;                          // port - 587/465
 
            $mail->setFrom($request->email, $request->first_name);
            $mail->addCC('m_attiquakram@yahoo.com');
 
            $mail->addReplyTo('sender@example.com', 'SenderReplyName');
 
            $mail->isHTML(true);                // Set email content format to HTML
 
            $mail->Subject = "Subject";
            $mail->Body    = "<html>
                                <head><title>Email</title></head>
                                <body>
                                    <p>This message send from bcs pakistan contact form</p>
                                    <p<strong>First Name: </strong> ".$request->first_name." </p><br/>
                                    <p<strong>Last Name: </strong> ".$request->last_name." </p><br/>
                                    <p<strong>Phone: </strong> ".$request->phone." </p><br/>
                                    <p<strong>Message: </strong> ".$request->message." </p><br/>
                                </body>
                            </html>";
 
            // $mail->AltBody = plain text version of email body;
 
            if(!$mail->send() ) {
                return back()->with("failed", "Email not sent.")->withErrors($mail->ErrorInfo);
            }else {
                return back()->with("success", "Email has been sent.");
            }
 
        } catch (Exception $e) {
             return back()->with('error','Message could not be sent.');
        }
    }

    public function index(Request $request)
    {
        $name = $request->all();
        $name = array_keys($name);
        $name = $name[0];
        $name = str_replace('_', ' ', $name);
        if ($name != '' || $name != null) {
            $certificate = PageMembership::
            with('membership_details')->
            where('name', $name)->first();
        }


        if ($certificate->membership_details != '' || $certificate->membership_details != null) {
            if (isset($certificate->membership_details->li1)) {
                $li = explode(',', $certificate->membership_details->li1);
                $data['li'] = array_filter($li);
            } else {
                $data['li'] = [];
            }

            $membership = Certificate::get();
            $data['certificate'] = $certificate;
            $data['membership'] = $membership;
        }

        if ($certificate->membership_details != '' || $certificate->membership_details != null) {
            if (isset($certificate->membership_details->li1)) {
                $li = explode(',', $certificate->membership_details->li1);
                $data['li1'] = array_filter($li);
            } else {
                $data['li1'] = [];
            }

            $membership = Certificate::get();
            $data['certificate'] = $certificate;
            $data['membership'] = $membership;
        }

        if ($certificate->membership_details != '' || $certificate->membership_details != null) {
            if (isset($certificate->membership_details->li2)) {
                $li = explode(',', $certificate->membership_details->li2);
                $data['li2'] = array_filter($li);
            } else {
                $data['li2'] = [];
            }

            $membership = Certificate::get();
            $data['certificate'] = $certificate;
            $data['membership'] = $membership;
        }

        if ($certificate->membership_details != '' || $certificate->membership_details != null) {
            if (isset($certificate->membership_details->li3)) {
                $li = explode(',', $certificate->membership_details->li3);
                $data['li3'] = array_filter($li);
            } else {
                $data['li3'] = [];
            }

            $membership = Certificate::get();
            $data['certificate'] = $certificate;
            $data['membership'] = $membership;
        }

        if ($certificate->membership_details != '' || $certificate->membership_details != null) {
            if (isset($certificate->membership_details->li4)) {
                $li = explode(',', $certificate->membership_details->li4);
                $data['li4'] = array_filter($li);
            } else {
                $data['li4'] = [];
            }

            $membership = Certificate::get();
            $data['certificate'] = $certificate;
            $data['membership'] = $membership;
        }

        if ($certificate->membership_details != '' || $certificate->membership_details != null) {
            if (isset($certificate->membership_details->last_li)) {
                $li = explode(',', $certificate->membership_details->last_li);
                $data['last_li'] = array_filter($li);
            } else {
                $data['last_li'] = [];
            }

            $membership = Certificate::get();
            $data['certificate'] = $certificate;
            $data['membership'] = $membership;
        }

        if ($certificate->membership_details != '' || $certificate->membership_details != null) {
            if (isset($certificate->membership_details->first_li)) {
                $li = explode(',', $certificate->membership_details->first_li);
                $data['first_li'] = array_filter($li);
            } else {
                $data['first_li'] = [];
            }

            $membership = Certificate::get();
            $data['certificate'] = $certificate;
            $data['membership'] = $membership;
        }

        if ($certificate->higher_page != '' || $certificate->higher_page != null) {
            if (isset($certificate->higher_page->exli)) {
                $li = explode(',', $certificate->higher_page->exli);
                $data['exli'] = array_filter($li);
            } else {
                $data['exli'] = [];
            }

            $membership = Certificate::get();
            $data['certificate'] = $certificate;
            $data['membership'] = $membership;
        }

        $peta11 = [];
        $i = 0;
        foreach ($certificate->membership_details->higher_page as $accordian_anchor2) {
            if (isset($accordian_anchor2->a1)) {
                $anchor = explode(',', $accordian_anchor2->a1);
                $peta11['a1'][$i] = array_filter($anchor);
                foreach ($peta11['a1'][$i] as $ancho) {
                    $anchossxd = explode('##', $ancho);
                    $data['a1'][$i][] = $anchossxd;
                }
            } else {
                $data['a1'] = [];
            }
            $i++;


        }

        $peta12 = [];
        $i = 0;
        foreach ($certificate->membership_details->higher_page as $accordian_anchor2) {
            if (isset($accordian_anchor2->a2)) {
                $anchor = explode(',', $accordian_anchor2->a2);
                $peta11['a2'][$i] = array_filter($anchor);
                foreach ($peta11['a2'][$i] as $ancho) {
                    $anchossxd = explode('##', $ancho);
                    $data['a2'][$i][] = $anchossxd;
                }
            } else {
                $data['a2'] = [];
            }
            $i++;


        }

        $peta13 = [];
        $i = 0;
        foreach ($certificate->membership_details->higher_page as $accordian_anchor2) {
            if (isset($accordian_anchor2->a3)) {
                $anchor = explode(',', $accordian_anchor2->a3);
                $peta11['a3'][$i] = array_filter($anchor);
                foreach ($peta11['a3'][$i] as $ancho) {
                    $anchossxd = explode('##', $ancho);
                    $data['a3'][$i][] = $anchossxd;
                }
            } else {
                $data['a3'] = [];
            }
            $i++;


        }

        $peta14 = [];
        $i = 0;
        foreach ($certificate->membership_details->higher_page as $accordian_anchor2) {
            if (isset($accordian_anchor2->a4)) {
                $anchor = explode(',', $accordian_anchor2->a4);
                $peta14['a4'][$i] = array_filter($anchor);
                foreach ($peta14['a4'][$i] as $ancho) {
                    $anchossxd = explode('##', $ancho);
                    $data['a4'][$i][] = $anchossxd;
                }
            } else {
                $data['a4'] = [];
            }
            $i++;


        }

        $peta15 = [];
        $i = 0;
        foreach ($certificate->membership_details->higher_page as $accordian_anchor3) {
            if (isset($accordian_anchor3->a5)) {
                $anchor = explode(',', $accordian_anchor3->a5);
                $peta11['a5'][$i] = array_filter($anchor);
                foreach ($peta11['a5'][$i] as $ancho) {
                    $anchossxd = explode('##', $ancho);
                    $data['a5'][$i][] = $anchossxd;
                }
            } else {
                $data['a5'] = [];
            }
            $i++;


        }

        $peta33 = [];
        $i = 0;
        foreach ($certificate->membership_details->higher_page as $accordian_anchor3) {
            if (isset($accordian_anchor3->a7)) {
                $anchor = explode(',', $accordian_anchor3->a7);
                $peta11['a7'][$i] = array_filter($anchor);
                foreach ($peta11['a7'][$i] as $ancho) {
                    $anchossxd = explode('##', $ancho);
                    $data['a7'][$i][] = $anchossxd;
                }
            } else {
                $data['a7'] = [];
            }
            $i++;


        }


        $peta16 = [];
        $i = 0;
        foreach ($certificate->membership_details->higher_page as $accordian_anchor3) {
            if (isset($accordian_anchor3->a6)) {
                $anchor = explode(',', $accordian_anchor3->a6);
                $peta16['a6'][$i] = array_filter($anchor);
                foreach ($peta16['a6'][$i] as $ancho) {
                    $anchossxd = explode('##', $ancho);
                    $data['a6'][$i][] = $anchossxd;
                }
            } else {
                $data['a6'] = [];
            }
            $i++;
        }
        $data['membership'] = PageMembership::with('page_details')->get();
        $data['certificates'] = Certificate::with('certificate_details')->orderby('name', 'ASC')->get();
        return view('membership', compact('data'));


    }






    //accordian


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_page');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);
        $check = PageMembership::where('name', $request->name)->first();
        if ($check == '' || $check == null) {
            PageMembership::create([
                'name' => $request->name
            ]);
        } else {
            return redirect('/page')->with(['status', 'Certification Already Exists']);
        }
        return redirect('/membership_details')->with(['status', 'Certification Added Successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Certificate $certificate
     * @return \Illuminate\Http\Response
     */
    public function show(Certificate $certificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Certificate $certificate
     * @return \Illuminate\Http\Response
     */
    public function edit(Certificate $certificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Certificate $certificate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Certificate $certificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Certificate $certificate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certificate $certificate)
    {
        //
    }
}
