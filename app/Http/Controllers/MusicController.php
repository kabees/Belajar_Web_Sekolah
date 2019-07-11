<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function index()
    {
    	$data_music = \App\Music::all();
    	return view('music.index',['cd_music' => $data_music]);
    }
    public function create(Request $Request)
    {
    	\App\Music::create($Request->all());
    	return redirect('/music')->with('sukses','Data Berhasil Dimasukan');
    }

    public function edit($id)
    {
        $music = \App\Music::find($id);
    	return view('music/edit',['cd_music' => $music]);
    }

    public function update(Request $Request,$id)
    {
        $music = \App\Music::find($id);
        $music->update($Request->all());
    	return redirect('/music')->with('sukses','Data Berhasil Di Update');
    }
    public function delete($id)
    {
        $music = \App\Music::find($id);
        $music->delete();
        return redirect('/music')->with('sukses','Data Berhasil Di Hapus');
    }
}


