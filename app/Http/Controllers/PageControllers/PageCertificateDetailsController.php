<?php

namespace App\Http\Controllers\PageControllers;

use App\PageApp\PageCertificate;
use App\PageApp\PageCertificateDetails;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PageCertificateDetailsController extends PageController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificates = PageCertificate::get();
        return view('add_page_data', compact('certificates'));
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
        $this->validate($request, [
            'certificate_id' => 'required',
            'h1',
            'p1',
            'p2',
            'wh',
            'wp',
            'li1',
            'eh',
            'ep',
            'li2',
            'lh',
            'lp',
            'li3',
            'rh',
            'rp',
            'li4',
            'bh',
            'l-bh1',
            'l-bp1',
            'l-bh2',
            'l-bp2',
            'l-bh3',
            'l-bp3',
            'l-bh4',
            'l-bp4',
            'r-bh1',
            'r-bp1',
            'r-bh2',
            'r-bp2',
            'r-bh3',
            'r-bp3',
            'r-bh4',
            'r-bp4',
            'last-h',
            'last-li'
        ]);
        if($request->has('new_certificate')){
            
        }
        $data = $request->all();
       
        $create = PageCertificateDetails::create($data);
        $certificates = PageCertificate::get();
        return redirect('/page_details')->with(['status', 'Certification Added Successfully', $certificates]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CertificateDetails  $certificateDetails
     * @return \Illuminate\Http\Response
     */
    public function show(CertificateDetails $certificateDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CertificateDetails  $certificateDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(CertificateDetails $certificateDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CertificateDetails  $certificateDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CertificateDetails $certificateDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CertificateDetails  $certificateDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(CertificateDetails $certificateDetails)
    {
        //
    }
}
