<?php

namespace App\Http\Controllers;

use App\Santri;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $santri = Santri::all();
        return view('santri.index', compact('santri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('santri.create');
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
            'divisi' => 'required',
            'alamat' => 'required'
        ]);

        $santri = new Santri;
        $santri->nama = $request->nama;
        $santri->divisi = $request->divisi;
        $santri->alamat = $request->alamat;

        $santri->save();

        return redirect()->route('index-santri');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function show(Santri $id)
    {
        $santri = Santri::find($id)->first();
        return view('santri.show', compact('santri'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function edit(Santri $id)
    {
        $santri = Santri::find($id)->first();
        return view('santri.edit', compact('santri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'nama' => 'required',
            'divisi' => 'required',
            'alamat' => 'required'
        ]);

        $santri = Santri::find($id);
        $santri->nama = $request->nama;
        $santri->divisi = $request->divisi;
        $santri->alamat = $request->alamat;

        $santri->update();

        return redirect()->route('index-santri');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $santri = Santri::find($id);

        $santri->delete();

        return redirect()->route('index-santri');
    }
}
