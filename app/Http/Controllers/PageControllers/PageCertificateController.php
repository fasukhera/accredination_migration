<?php

namespace App\Http\Controllers\PageControllers;

use App\PageApp\PageCertificate;
use App\PageApp\PageCertificateDetails;
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
        $certificates = PageCertificate::with('certificate_details')->get();
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
            with('certificate_details', 'certificate_details.certificate_details_accordian')->
            where('name', $name)->first();
        }
        if ($certificate->certificate_details != '' || $certificate->certificate_details != null) {
            if (isset($certificate->certificate_details->li)) {
                $li = explode(',', $certificate->certificate_details->li);
                $data['li'] = array_filter($li);
            } else {
                $data['li'] = [];
            }

            $certificates = PageCertificate::get();
            $data['certificate'] = $certificate;
            $data['certificates'] = $certificates;
        }
        $peta = [];
        $i = 0;
        foreach ($certificate->certificate_details->certificate_details_accordian as $accordian_anchor) {
            if (isset($accordian_anchor->a)) {
                $anchor = explode(',', $accordian_anchor->a);
                $peta['a'][$i] = array_filter($anchor);
                foreach ($peta['a'][$i] as $ancho){
                    $anchossxd = explode('##', $ancho);
                    $data['a'][$i][]  = $anchossxd;
                }
            } else {
                $data['a'] = [];
            }
            $i++;
        }
        $j = 0;
        $hexa=[];
        foreach ($certificate->certificate_details->certificate_details_accordian as $certificate_anchor) {
            if (isset($certificate_anchor->certification)) {
                $certification = explode(',', $certificate_anchor->certification);
                $hexa['certificationx'][$j] = array_filter($certification);
                foreach ($hexa['certificationx'][$j] as $certi){
                    $certificationxssd = explode('##', $certi);
                    $data['certificationx'][$j][]  = $certificationxssd;
                }
            } else {
                $data['certificationx'] = [];
            }
            $j++;
        }
        return view('certificate', compact('data'));
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
