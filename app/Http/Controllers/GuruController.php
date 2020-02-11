<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;
use Illuminate\Support\Facades\File;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Session;
use Illuminate\Support\Str;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = Guru::all();

        return view('backend.guru.index', compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = Guru::all();
        return view('backend.guru.create', compact('guru'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $guru = new Guru;
        $guru->foto = $request->foto;
        $guru->nama_guru = $request->nama_guru;
        $guru->jabatan = $request->jabatan;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path() . '/assets/img/guru/';
            $filename = Str::random(6) . '_' . $file->getClientOriginalName();
            $upload = $file->move($destinationPath, $filename);

            $guru->foto = $filename;
        }

        $guru->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan data guru bernama <b>$guru->foto</b>!"
        ]);
        return redirect()->route('guru.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guru = Guru::findOrFail($id);
        return view('backend.guru.edit', compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $guru = Guru::findOrFail($id);
        $guru->foto = $request->foto;
        $guru->nama_guru = $request->nama_guru;
        $guru->jabatan = $request->jabatan;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path() . '/assets/img/guru/';
            $filename = Str::random(40) . '_' . $file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $guru->foto = $filename;
        }

        $guru->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan</b>!"
        ]);
        return redirect()->route('guru.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guru = Guru::findOrfail($id)->delete();
        Session::flash("flash_notification",[
             "level" => "Success",
             "message" => "Berhasil menghapus<b>"
         ]);
        return redirect()->route('guru.index');
    }
}
