<?php

namespace App\Http\Controllers;

use App\Supervisi;
use App\Jadwal;
use App\Materi;
use Illuminate\Http\Request;
use PDF;

class SupervisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supervisis = Supervisi::latest()->paginate(5);
        $jadwals = Jadwal::all();
        $materis = Materi::all();

        return view('supervisis.index',compact('supervisis','jadwals','materis'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supervisis.create');
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
  
        Supervisi::create($request->all());
   
        return redirect()->route('supervisis.index')
                        ->with('success','Supervisi berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supervisi  $supervisi
     * @return \Illuminate\Http\Response
     */
    public function cetak()
    {   
        $supervisis = Supervisi::all();

        $pdf = PDF::loadview('supervisis.cetak',['supervisis'=>$supervisis]);
        return $pdf->stream('Laporan-supervisi.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supervisi  $supervisi
     * @return \Illuminate\Http\Response
     */
    public function edit(Supervisi $supervisi)
    {
        return view('supervisis.edit',compact('supervisi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supervisi  $supervisi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supervisi $supervisi)
    {
        
  
        $supervisi->update($request->all());
  
        return redirect()->route('supervisis.index')
                        ->with('success','Supervisi berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supervisi  $supervisi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supervisi $supervisi)
    {
        $supervisi->delete();
  
        return redirect()->route('supervisis.index')
                        ->with('success','Supervisi berhasil dihapus');
    }
}
