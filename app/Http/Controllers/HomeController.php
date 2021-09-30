<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\Cuti;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $dataPegawai = Pegawai::latest();
        $dataTotalPegawai = Pegawai::count();
        $dataTotalCuti = Cuti::count();
        // $dataPegawai = Pegawai::find(3);
        return view('home',compact('dataPegawai','dataTotalPegawai','dataTotalCuti'))->withdataPegawai($dataPegawai->paginate(3));
    }
    public function frontend()
    {
        return view('layouts.frontend');
    }
}