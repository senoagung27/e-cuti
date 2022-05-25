<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cuti;
use App\Pegawai;
use DB;

class CutiController extends Controller
{
   public function index()
    {
        // $dataCuti = DB::table('cutis')->paginate(5);
         $dataCuti = Cuti::get();
        return view('cuti.index', compact('dataCuti'));
    }
    public function create()
    {
         $dataCuti = Cuti::where('status','=','Pending')->get();
         $dataPegawai = Pegawai::get();
        return view('cuti.create', compact('dataCuti','dataPegawai'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        Cuti::create(
            [
                'id_pegawai' => $request->id_pegawai,
                'tanggal_cuti' => $request->tanggal_cuti,
                'lama_cuti' => $request->lama_cuti,
                'keterangan' => $request->keterangan,
                'sisa_cuti' => $request->sisa_cuti,
                // 'status' => $request->status,
            ]
        );
        // return view('JenisHak.create');
        // return redirect('/JenisHak');
        return redirect('/Cuti')->with('tambah', 'Data Berhasil Di Tambah');
    }
    public function edit($id)
    {
        $dataCuti = Cuti::find($id);
        return view('cuti.edit',compact('dataCuti'));
    }

    public function update(Request $request,$id)
    {
        // dd($request->all());
        $dataCuti = Cuti::find($id);
       Cuti::where('id',$request->id)->update([
                'tanggal_cuti' => $request->tanggal_cuti,
                'lama_cuti' => $request->lama_cuti,
                'keterangan' => $request->keterangan,
                'sisa_cuti' => $request->sisa_cuti,
                'status' => $request->status,
		]);
        return redirect('/Cuti')->with('edit', 'Data Berhasil Di Edit');
    }
    // public function edit($id)
    // {
    //     $dataCuti = Cuti::where('id','=',$id)->first();
    //     $dataPegawai = Pegawai::get();
    //     return view('cuti.edit',compact('dataCuti','dataPegawai'));
    // }

    // public function update(Request $request)
    // {
    //     Cuti::where('id',$request->id)->update([
	// 		    'id_pegawai' => $request->id_pegawai,
    //             'tanggal_cuti' => $request->tanggal_cuti,
    //             'lama_cuti' => $request->lama_cuti,
    //             'keterangan' => $request->keterangan,
    //             'status' => $request->status,
	// 	]);
    //     return redirect('/Cuti')->with('edit', 'Data Berhasil Di Edit');
    // }
    public function delete($id)
    {
         $dataCuti = Cuti::where('id','=',$id)->first();
        // dd($dataBiodata);
        $dataCuti->delete();
        return redirect('/Cuti');
    }
}
