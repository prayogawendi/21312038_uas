<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;
use RealRashid\SweetAlert\Facades\Alert;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biodata = Biodata::all();
        return view('biodata.index', compact('biodata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('/biodata.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $biodata = new Biodata;

        $request->validate([
            'npm' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        $biodata->npm = $request->npm;
        $biodata->nama = $request->nama;
        $biodata->alamat = $request->alamat;

        $simpan = $biodata->save();

        if($simpan){
            Alert::success('Success', 'Data Berhasil Ditambah');
            return redirect('/biodata');
        }else{
            Alert::error('Failed', 'Data Gagal Ditambah');
        }

        return redirect('/biodata');
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
        $biodata = Biodata::where('id', $id)->first();

        return view('biodata.edit', compact('biodata'));
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
            'npm => required',
            'nama => required',
            'alamat => required',
        ]);

        $biodata =Biodata::find($id);
        $biodata->npm = $request->npm;
        $biodata->nama = $request->nama;
        $biodata->alamat = $request->alamat;

        $ubah = $biodata->save();

        if($ubah){
            Alert::success('Success', 'Data Berhasil Ditambah');
            return redirect('/biodata');
        }else{
            Alert::error('Failed', 'Data Gagal Ditambah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $biodata = Biodata::find($id);
        $hapus = $biodata -> delete();

        if($hapus){
            Alert::success('Success', 'Data Berhasil Dihapus');
            return redirect('/biodata');
        }else{
            Alert::error('Failed', 'Data Gagal Ditambah');
        }

        return redirect('/biodata');
    }
}
