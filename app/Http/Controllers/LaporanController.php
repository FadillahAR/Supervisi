<?php

namespace App\Http\Controllers;

use App\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporans = Laporan::latest()->paginate(5);
  
        return view('laporans.index',compact('laporans'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laporans.create');
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
            'materi' => 'required',
            'mapel' => 'required',
            'rombel' => 'required',
            'author' => 'required',
            'deskripsi' => 'required',
        ]);
  
        Laporan::create($request->all());
   
        return redirect()->route('laporans.index')
                        ->with('success','Materi created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan $laporan)
    {
        return view('laporans.show',compact('laporan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporan $laporan)
    {
        return view('laporans.edit',compact('laporan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporan $laporan)
    {
        $request->validate([
            'materi' => 'required',
            'mapel' => 'required',
            'rombel' => 'required',
            'author' => 'required',
            'deskripsi' => 'required',

        ]);
  
        $laporan->update($request->all());
  
        return redirect()->route('laporans.index')
                        ->with('success','Materi updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporan $laporan)
    {
        $laporan->delete();
  
        return redirect()->route('laporans.index')
                        ->with('success','Materi deleted successfully');
    }
}
