<?php

namespace App\Http\Controllers;

use App\Arsip;
use Illuminate\Http\Request;

class ArsipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $arsip = Arsip::all();
        return view('arsip.index', compact('arsip'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('arsip/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;

        // $arsip = new Arsip;
        // $arsip->penyimpanan = $request->penyimpanan;
        // $arsip->dokumentasi = $request->dokumentasi;
        // $arsip->keamanan = $request->keamanan;
        // $arsip->sistem = $request->sistem;

        // $arsip->save();


        // Arsip::create([
        //     'penyimpanan' => $request->penyimpanan,
        //     'dokumentasi' => $request->dokumentasi,
        //     'keamanan' => $request->keamanan,
        //     'sistem' => $request->sistem
        // ]);

        $request->validate([
            'penyimpanan' => 'required',
            'dokumentasi' => 'required',
            'keamanan' => 'required',
            'sistem' => 'required'
        ]);

        Arsip::create($request->all());

        return redirect('/arsip')->with('status', 'Data Mata Kuliah Telah Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function show(Arsip $arsip)
    {
        //
        return view('arsip.detail', compact('arsip'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function edit(Arsip $arsip)
    {
        //
        return view('arsip.edit', compact('arsip'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Arsip $arsip)
    {
        //
        Arsip::where('id', $arsip->id)
            ->update([
                'penyimpanan' => $request->penyimpanan,
                'dokumentasi' => $request->dokumentasi,
                'keamanan' => $request->keamanan,
                'sistem' => $request->sistem
            ]);
        return redirect('/arsip')->with('status', 'Data Mata Kuliah Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Arsip $arsip)
    {
        //
        // return $arsip;
        Arsip::destroy($arsip->id);

        return redirect('/arsip')->with('status', 'Data Mata Kuliah Berhasil Dihapus!');
    }
}
