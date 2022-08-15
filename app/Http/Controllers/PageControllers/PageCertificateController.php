<?php

namespace App\Http\Controllers\PageControllers;

use App\PageApp\PageMembership;
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
        $data['certificates'] = Certificate::with('certificate_details')->orderby('name','ASC')->get();
        $certificates = $data['certificates'];
        $membership = PageMembership::with('page_details')->get();

        return view('welcome', compact('data','certificates','membership'));
    }

    public function index(Request $request)
    {
        $name = $request->all();
        $name = array_keys($name);
        $name = $name[0];
        $name = str_replace('_',' ',$name);
        if ($name != '' || $name != null) {
            $certificate = PageCertificate::
            with('page_details','page_details.page_details_accordian')->
            where('name', $name)->first();
        }

    

        if ($certificate->page_details != '' || $certificate->page_details != null) {
            if (isset($certificate->page_details->li1)) {
                $li = explode(',', $certificate->page_details->li1);
                $data['li'] = array_filter($li);
            } else {
                $data['li'] = [];
            }

            $certificates = Certificate::get();
            $data['certificate'] = $certificate;
            $data['certificates'] = $certificates;
        }

        if ($certificate->page_details != '' || $certificate->page_details != null) {
            if (isset($certificate->page_details->li1)) {
                $li = explode(',', $certificate->page_details->li1);
                $data['li1'] = array_filter($li);
            } else {
                $data['li1'] = [];
            }

            $certificates = Certificate::get();
            $data['certificate'] = $certificate;
            $data['certificates'] = $certificates;
        }

        if ($certificate->page_details != '' || $certificate->page_details != null) {
            if (isset($certificate->page_details->li2)) {
                $li = explode(',', $certificate->page_details->li2);
                $data['li2'] = array_filter($li);
            } else {
                $data['li2'] = [];
            }

            $certificates = Certificate::get();
            $data['certificate'] = $certificate;
            $data['certificates'] = $certificates;
        }

        if ($certificate->page_details != '' || $certificate->page_details != null) {
            if (isset($certificate->page_details->li3)) {
                $li = explode(',', $certificate->page_details->li3);
                $data['li3'] = array_filter($li);
            } else {
                $data['li3'] = [];
            }

            $certificates = Certificate::get();
            $data['certificate'] = $certificate;
            $data['certificates'] = $certificates;
        }

        if ($certificate->page_details != '' || $certificate->page_details != null) {
            if (isset($certificate->page_details->li4)) {
                $li = explode(',', $certificate->page_details->li4);
                $data['li4'] = array_filter($li);
            } else {
                $data['li4'] = [];
            }

            $certificates = Certificate::get();
            $data['certificate'] = $certificate;
            $data['certificates'] = $certificates;
        }

        if ($certificate->page_details != '' || $certificate->page_details != null) {
            if (isset($certificate->page_details->last_li)) {
                $li = explode(',', $certificate->page_details->last_li);
                $data['last_li'] = array_filter($li);
            } else {
                $data['last_li'] = [];
            }

            $certificates = Certificate::get();
            $data['certificate'] = $certificate;
            $data['certificates'] = $certificates;
        }

        if ($certificate->page_details != '' || $certificate->page_details != null) {
            if (isset($certificate->page_details->first_li)) {
                $li = explode(',', $certificate->page_details->first_li);
                $data['first_li'] = array_filter($li);
            } else {
                $data['first_li'] = [];
            }

            $certificates = Certificate::get();
            $data['certificate'] = $certificate;
            $data['certificates'] = $certificates;
        }

        if ($certificate->higher_page!= '' || $certificate->higher_page != null) {
            if (isset($certificate->higher_page->exli)) {
                $li = explode(',', $certificate->higher_page->exli);
                $data['exli'] = array_filter($li);
            } else {
                $data['exli'] = [];
            }

            $certificates = Certificate::get();
            $data['certificate'] = $certificate;
            $data['certificates'] = $certificates;
        }

        $peta11 = [];
        $i = 0;
        foreach ($certificate->page_details->higher_page as $accordian_anchor2) {
            if (isset($accordian_anchor2->a1)) {
                $anchor = explode(',', $accordian_anchor2->a1);
                $peta11['a1'][$i] = array_filter($anchor);
                foreach ($peta11['a1'][$i] as $ancho){
                    $anchossxd = explode('##', $ancho);
                    $data['a1'][$i][]  = $anchossxd;
                }
            } else {
                $data['a1'] = [];
            }
            $i++;
            
            
            
            
        }

        $peta12 = [];
        $i = 0;
        foreach ($certificate->page_details->higher_page as $accordian_anchor2) {
            if (isset($accordian_anchor2->a2)) {
                $anchor = explode(',', $accordian_anchor2->a2);
                $peta11['a2'][$i] = array_filter($anchor);
                foreach ($peta11['a2'][$i] as $ancho){
                    $anchossxd = explode('##', $ancho);
                    $data['a2'][$i][]  = $anchossxd;
                }
            } else {
                $data['a2'] = [];
            }
            $i++;
            
            
            
            
        }

        $peta13 = [];
        $i = 0;
        foreach ($certificate->page_details->higher_page as $accordian_anchor2) {
            if (isset($accordian_anchor2->a3)) {
                $anchor = explode(',', $accordian_anchor2->a3);
                $peta11['a3'][$i] = array_filter($anchor);
                foreach ($peta11['a3'][$i] as $ancho){
                    $anchossxd = explode('##', $ancho);
                    $data['a3'][$i][]  = $anchossxd;
                }
            } else {
                $data['a3'] = [];
            }
            $i++;
            
            
            
            
        }

        $peta14 = [];
        $i = 0;
        foreach ($certificate->page_details->higher_page as $accordian_anchor2) {
            if (isset($accordian_anchor2->a4)) {
                $anchor = explode(',', $accordian_anchor2->a4);
                $peta14['a4'][$i] = array_filter($anchor);
                foreach ($peta14['a4'][$i] as $ancho){
                    $anchossxd = explode('##', $ancho);
                    $data['a4'][$i][]  = $anchossxd;
                }
            } else {
                $data['a4'] = [];
            }
            $i++;
            
            
            
            
        }

        $peta15 = [];
        $i = 0;
        foreach ($certificate->page_details->higher_page as $accordian_anchor3) {
            if (isset($accordian_anchor3->a5)) {
                $anchor = explode(',', $accordian_anchor3->a5);
                $peta11['a5'][$i] = array_filter($anchor);
                foreach ($peta11['a5'][$i] as $ancho){
                    $anchossxd = explode('##', $ancho);
                    $data['a5'][$i][]  = $anchossxd;
                }
            } else {
                $data['a5'] = [];
            }
            $i++;
            
            
            
            
        }

     

        $peta16 = [];
        $i = 0;
        foreach ($certificate->page_details->higher_page as $accordian_anchor3) {
            if (isset($accordian_anchor3->a6)) {
                $anchor = explode(',', $accordian_anchor3->a6);
                $peta16['a6'][$i] = array_filter($anchor);
                foreach ($peta16['a6'][$i] as $ancho){
                    $anchossxd = explode('##', $ancho);
                    $data['a6'][$i][]  = $anchossxd;
                }
            } else {
                $data['a6'] = [];
            }
            $i++;
            
            
            
            
        }
        

        
        //accordian
        $peta1 = [];
        $i = 0;
        foreach ($certificate->page_details->link_details as $accordian_anchor) {
            if (isset($accordian_anchor->a1)) {
                $anchor = explode(',', $accordian_anchor->a1);
                $peta1['a1'][$i] = array_filter($anchor);
                foreach ($peta1['a1'][$i] as $ancho){
                    $anchossxd = explode('##', $ancho);
                    $data['a1'][$i][]  = $anchossxd;
                }
            } else {
                $data['a1'] = [];
            }
            $i++;
            
            
        }
        $peta2 = [];
        $i = 0;
        foreach ($certificate->page_details->link_details as $accordian_anchor) {
            if (isset($accordian_anchor->a2)) {
                $anchor = explode(',', $accordian_anchor->a2);
                $peta2['a2'][$i] = array_filter($anchor);
                foreach ($peta2['a2'][$i] as $ancho){
                    $anchossxd = explode('##', $ancho);
                    $data['a2'][$i][]  = $anchossxd;
                }
            } else {
                $data['a2'] = [];
            }
            $i++;
        }
        $peta3 = [];
        $i = 0;
        foreach ($certificate->page_details->link_details as $accordian_anchor) {
            if (isset($accordian_anchor->a3)) {
                $anchor = explode(',', $accordian_anchor->a3);
                $peta3['a3'][$i] = array_filter($anchor);
                foreach ($peta3['a3'][$i] as $ancho){
                    $anchossxd = explode('##', $ancho);
                    $data['a3'][$i][]  = $anchossxd;
                }
            } else {
                $data['a3'] = [];
            }

            
            $i++;
        }


        $peta1 = [];
        $i = 0;
        foreach ($certificate->page_details->link_details as $accordian_anchor) {
            if (isset($accordian_anchor->a1)) {
                $anchor = explode(',', $accordian_anchor->a1);
                $peta1['a1'][$i] = array_filter($anchor);
                foreach ($peta1['a1'][$i] as $ancho){
                    $anchossxd = explode('##', $ancho);
                    $data['a1'][$i][]  = $anchossxd;
                }
            } else {
                $data['a1'] = [];
            }
            $i++;
            
            
        }
        $peta2 = [];
        $i = 0;
        foreach ($certificate->page_details->link_details as $accordian_anchor) {
            if (isset($accordian_anchor->a2)) {
                $anchor = explode(',', $accordian_anchor->a2);
                $peta2['a2'][$i] = array_filter($anchor);
                foreach ($peta2['a2'][$i] as $ancho){
                    $anchossxd = explode('##', $ancho);
                    $data['a2'][$i][]  = $anchossxd;
                }
            } else {
                $data['a2'] = [];
            }
            $i++;
        }
        $peta3 = [];
        $i = 0;
        foreach ($certificate->page_details->link_details as $accordian_anchor) {
            if (isset($accordian_anchor->a3)) {
                $anchor = explode(',', $accordian_anchor->a3);
                $peta3['a3'][$i] = array_filter($anchor);
                foreach ($peta3['a3'][$i] as $ancho){
                    $anchossxd = explode('##', $ancho);
                    $data['a3'][$i][]  = $anchossxd;
                }
            } else {
                $data['a3'] = [];
            }

            
            $i++;
        }


        
              
        $j = 0;
        
        foreach ($certificate->page_details->page_details_accordian as $certificate_anchor) {
            if (isset($certificate_anchor->li)) {
                $li = explode(',', $certificate_anchor->li);
                $data['acc_li'][$j] = array_filter($li);
            } else {
                $data['acc_li'] = ["nothing here"];
            }
            $j++;
        }       
        $data['membership'] = PageMembership::with('page_details')->get();
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
        return redirect('/page_details')->with(['status', 'Certification Added Successfully']);
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
