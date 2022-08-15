<?php

namespace App\Http\Controllers;

use App\Certificate;
use App\CertificateDetails;
use App\CertificateDetailsAccordian;
use Illuminate\Http\Request;

class CertificateDetailsAccordianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificates = Certificate::with('certificate_details')->orderby('name','ASC')->get();

        return view('accordian', compact('certificates'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'certificate_id' => 'required',
            'main_h' => 'required',
            'h1' => 'required',
            'p1' => 'required',
            'a' => 'required', //comma separated and visible names are ## seprated
            'certification' => 'required', //comma seprated and visible names are ## seprated
            'h2' => 'required',
            'p2' => 'required'
        ]);
        $data = $request->except(['certificate_id']);
        $certificate_details_id = CertificateDetails::where('certificate_id', $request->certificate_id)->first();
        $data['certificate_details_id'] = $certificate_details_id->id;
        $store = CertificateDetailsAccordian::create($data);
        $certificates = Certificate::with('certificate_details')->orderby('name','ASC')->get();
        return redirect('/accordion')->with(['status', 'Certification Added Successfully', $certificates]);

    }

    /**
     * Display the specified resource.
     *
     * @param \App\CertificateDetailsAccordian $certificateDetailsAccordian
     * @return \Illuminate\Http\Response
     */
    public function show(CertificateDetailsAccordian $certificateDetailsAccordian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\CertificateDetailsAccordian $certificateDetailsAccordian
     * @return \Illuminate\Http\Response
     */
    public function edit(CertificateDetailsAccordian $certificateDetailsAccordian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\CertificateDetailsAccordian $certificateDetailsAccordian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CertificateDetailsAccordian $certificateDetailsAccordian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\CertificateDetailsAccordian $certificateDetailsAccordian
     * @return \Illuminate\Http\Response
     */
    public function destroy(CertificateDetailsAccordian $certificateDetailsAccordian)
    {
        //
    }
}
