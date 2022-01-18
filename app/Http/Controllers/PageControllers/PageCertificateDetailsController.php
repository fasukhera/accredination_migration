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
            'h1' => 'required',
            'h2' => 'required',
            'p1' => 'required',
            'h2' => 'required',
            'li' => 'required',
            'h2' => 'required',
            'p' => 'null',
            'a' => 'required',
            'v1' => 'required'
        ]);
        if($request->has('new_certificate')){
            
        }
        $data = $request->except(['v1']);
        $file = $request->file('v1');
        $current = Carbon::now();
        $current = str_replace(' ', '_', $current);
        $current = str_replace(' ', '', $current);
        $current = str_replace('-', '', $current);
        $current = str_replace(':', '', $current);
        $fileName = $current . '.' . $file->getClientOriginalExtension();
        $destination_path = storage_path('app/public/');
        $file->move($destination_path, $fileName);
        $destination_path = '/storage/' . $fileName;
        $data['v1'] = $destination_path;
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