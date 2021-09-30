<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use DB;

class PegawaiController extends Controller
{
    public function index()
    {
        $dataPegawai = DB::table('pegawais')->paginate(5);
        return view('pegawai.index', compact('dataPegawai'));
    }
    public function create()
    {
         $dataPegawai = Pegawai::get();
        return view('pegawai.create', compact('dataPegawai',));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        Pegawai::create(
            [
                 'nip' => $request->nip,
                'nama_pegawai' => $request->nama_pegawai,
                'alamat' => $request->alamat,
                'tanggal_lahir' => $request->tanggal_lahir,
                'tanggal_join' => $request->tanggal_join,
            ]
        );
        // return view('JenisHak.create');
        // return redirect('/JenisHak');
        return redirect('/Pegawai')->with('tambah', 'Data Berhasil Di Tambah');
    }
    public function edit($id)
    {
         $dataPegawai = Pegawai::find($id);
        return view('pegawai.edit',compact('dataPegawai'));
    }

    public function update(Request $request, $id)
    {
        $dataPegawai = Pegawai::find($id);
        $dataPegawai->update($request->all());
        return redirect('/Pegawai')->with('edit', 'Data Berhasil Di Edit');
    }
    public function delete($id)
    {
         $dataPegawai = Pegawai::where('id','=',$id)->first();
        // dd($dataBiodata);
        $dataPegawai->delete();
        return redirect('/Pegawai');
    }
}