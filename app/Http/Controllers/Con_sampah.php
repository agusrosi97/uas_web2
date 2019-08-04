<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Con_sampah extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = "active";
        $title ="Kategori Buku";
        $judul_navbar = "Daftar Kategori";
        $sampah = \App\Sampah::all();
        // $data=$this->data_nas();
        return view('perpus.sampah.sampah',compact('sampah','title','judul_navbar','active'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'jenis_sampah' => 'required',
            'harga' => 'required|max:10',
        ]);
        $sampah = new \App\Sampah;
        $sampah->jenis_sampah = $request->jenis_sampah;
        $sampah->harga = $request->harga;
        $sampah->save();
        return redirect('sampah')->with('status', 'Sampah Berhasil Simpan!');
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
        $active = "active";
        $sampah = \App\Sampah::find($id);
        return view('perpus.sampah.sampah_edit',compact('sampah','active'));
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
        $request->validate([
            'jenis_sampah' => 'required',
            'harga' => 'required|max:10',
        ]);
        $sampah = \App\Sampah::find($id);
        $sampah->jenis_sampah = $request->jenis_sampah;
        $sampah->harga = $request->harga;
        $sampah->save();
        return redirect('sampah')->with('status', 'Berhasil Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sampah = \App\Sampah::find($id);
        $sampah->delete();

        return redirect('/sampah')->with('status_h', 'Data telah dihapus');
    }
}
