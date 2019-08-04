<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Yajra\Datatables\Datatables;

class Con_nasabah extends Controller
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
        $nasabah = \App\Nasabah::all();
        // $data=$this->data_nas();
        return view('perpus.nasabah.nasabah',compact('nasabah','title','judul_navbar','active'));
    }
    // public function data_nas()
    // {
    //   return Datatables::of(\App\Nasabah::query())->make(true);
    // }

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
            'nama' => 'required',
            'hp' => 'required',
            'alamat' => 'required',
        ]);
        $nasabah = new \App\Nasabah;
        $nasabah->nama = $request->nama;
        $nasabah->alamat = $request->alamat;
        $nasabah->hp = $request->hp;
        $nasabah->save();
        return redirect('nasabah')->with('status', 'Berhasil Simpan!');
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
        $nasabah = \App\Nasabah::find($id);
        return view('perpus.nasabah.nasabah_edit',compact('nasabah','active'));
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
        $nasabah = \App\Nasabah::find($id);
        $nasabah->nama = $request->nama;
        $nasabah->hp = $request->hp;
        $nasabah->alamat = $request->alamat;
        $nasabah->save();
        return redirect('nasabah')->with('status', 'Berhasil Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $b = \App\Nasabah::find($id);
        $b->delete();

        return redirect('/nasabah')->with('status_h', 'Data telah dihapus');
    }
}
