<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data_siswa = \App\siswa::all();
        return view('siswa.index',['data_siswa' => $data_siswa]);
    }

    public function create(Request $request)
    {
        \App\siswa::create($request->all());
        return redirect('/siswa')->with('sukses','Tambah Data Sukses');
    }
    

    public function edit($id)
    {
        $siswa = \App\siswa::find($id);
        return view('siswa/edit',['siswa' => $siswa]);
    }

    public function update(Request $request,$id)
    {
        $siswa = \App\siswa::find($id);
        $siswa->update($request->all());
        return redirect('/siswa')->with('sukses','Data Berhasil Diupdate');
    }

    public function tampilan()
    {
        $siswa = \App\siswa::all();
        return view('/siswa');
    }

     public function delete($id)
    {
        $siswa = \App\siswa::find($id);
        $siswa->delete();
        return redirect('/siswa')->with('sukses','Data Berhasil Dihapus');
    }
    
}

