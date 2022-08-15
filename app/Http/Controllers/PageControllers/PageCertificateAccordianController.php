<?php

namespace App\Http\Controllers\PageControllers;

use App\PageApp\PageCertificate;
use App\PageApp\PageCertificateDetails;
use App\PageApp\PageCertificateAccordian;
use Illuminate\Http\Request;

class PageCertificateAccordianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificates = Certificate::with('page_details')->get();

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
        $certificate_details_id = PageCertificateDetails::where('certificate_id', $request->certificate_id)->first();
        $data['certificate_details_id'] = $certificate_details_id->id;
        $store = PageCertificateAccordian::create($data);
        $certificates = PageCertificate::with('certificate_details')->get();
        return redirect('/pageaccordion')->with(['status', 'Certification Added Successfully', $pcertificates]);

    }

    /**
     * Display the specified resource.
     *
     * @param \App\PageApp\PageCertificateAccordian $pageCertificateAccordian
     * @return \Illuminate\Http\Response
     */
    public function show(PageCertificateAccordian $pageCertificateAccordian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\PageApp\PageCertificateAccordian $pageCertificateAccordian
     * @return \Illuminate\Http\Response
     */
    public function edit(PageCertificateAccordian $pageCertificateAccordian)
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
