<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
     
    }
    public function login()
    {
        return view('login');
    }
    public function prosesLogin(Request $request)
    {
        $nama=$request->nama;
        $kelas=$request->kelas;

        return view('dashboard',compact('nama','kelas'));
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function pageCandi($candi)
    {
        return view('page-candi',compact('candi'));
    }
  
    
}
