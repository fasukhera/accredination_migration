<?php

namespace App\Http\Controllers\PageControllers;

use App\PageApp\PageCertificate;
use App\PageApp\PageCertificateDetails;
use App\Certificate;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PageCertificateController extends PageController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function landing()
    {
        $certificates = PageCertificate::with('page_details')->get();
        return view('welcome', compact('certificates'));
    }

    public function index(Request $request)
    {
        $name = $request->all();
        $name = array_keys($name);
        $name = $name[0];
        $name = str_replace('_',' ',$name);
        if ($name != '' || $name != null) {
            $certificate = PageCertificate::
            with('page_details')->
            where('name', $name)->first();
        }
        if ($certificate->page_details != '' || $certificate->page_details != null) {
            if (isset($certificate->page_details->li)) {
                $li = explode(',', $certificate->page_details->li);
                $data['li'] = array_filter($li);
            } else {
                $data['li'] = [];
            }

        

            $certificates = Certificate::get();
            $data['certificate'] = $certificate;
            $data['certificates'] = $certificates;
        }

        return view('view_page', compact('data'));
    }

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
        $check = PageCertificate::where('name', $request->name)->first();
        if ($check == '' || $check == null) {
            PageCertificate::create([
                'name' => $request->name
            ]);
        } else {
            return redirect('/page')->with(['status', 'Certification Already Exists']);
        }
        return redirect('/page')->with(['status', 'Certification Added Successfully']);
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
