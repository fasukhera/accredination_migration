<?php

namespace App\Http\Controllers;

use App\Certificate;
use App\CertificateDetails;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function landing()
    {
        $certificates = Certificate::with('certificate_details')->get();
        return view('welcome', compact('certificates'));
    }

    public function index(Request $request)
    {
        $name = $request->all();
        $name = array_keys($name);
        $name = $name[0];
        if ($name != '' || $name != null) {
            $certificate = Certificate::with('certificate_details', 'certificate_details.certificate_details_accordian')->where('name', $name)->first();
        }
        if ($certificate->certificate_details != '' || $certificate->certificate_details != null) {
            if (isset($certificate->certificate_details->li)) {
                $li = explode(',', $certificate->certificate_details->li);
                $data['li'] = array_filter($li);
            } else {
                $data['li'] = [];
            }

            $certificates = Certificate::get();
            $data['certificate'] = $certificate;
            $data['certificates'] = $certificates;
        }
        if (isset($certificate->certificate_details->certificate_details_accordian->a)) {
            $a = explode(',', $certificate->certificate_details->certificate_details_accordian->a);
            $data['a'] = array_filter($a);
        } else {
            $data['a'] = [];
        }
        if (isset($certificate->certificate_details->certificate_details_accordian->certification)) {
            $certification = explode(',', $certificate->certificate_details->certificate_details_accordian->certification);
            $data['certificationx'] = array_filter($certification);
        } else {
            $data['certificationx'] = [];
        }
        return view('certificate', compact('data'));
//        return redirect('');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {

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
