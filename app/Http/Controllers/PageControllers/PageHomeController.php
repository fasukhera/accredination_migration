<?php

namespace App\Http\Controllers\PageControllers;

use App\PageApp\PageCertificate;
use Illuminate\Http\Request;

class PageHomeController extends PageController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

    }
}
