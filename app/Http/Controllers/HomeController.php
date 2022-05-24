<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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
        $urldata= DB::table('url_generator')->get();
        // dd($urldata);
        return view('urlgenerator.url', ['urldata' => $urldata]);
        // return 'berhasil';
        //  return view('urlgenerator.url');
        // return view('home');
    }

    
}
