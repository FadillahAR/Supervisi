<?php

namespace App\Http\Controllers;

use App\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materis = Materi::latest()->paginate(5);
  
        return view('materis.index',compact('materis'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materis.create');
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
            'file' => 'required',
        ]);
  
        Materi::create($request->all());
   
        return redirect()->route('materis.index')
                        ->with('success','Materi created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function show(Materi $materi)
    {
        return view('materis.show',compact('materi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function edit(Materi $materi)
    {
        return view('materis.edit',compact('materi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materi $materi)
    {
        $request->validate([
            'materi' => 'required',
            'mapel' => 'required',
            'rombel' => 'required',
            'author' => 'required',
            'file' => 'required',
        ]);
  
        $materi->update($request->all());
  
        return redirect()->route('materis.index')
                        ->with('success','Materi updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materi $materi)
    {
        $materi->delete();
  
        return redirect()->route('materis.index')
                        ->with('success','Materi deleted successfully');
    }
}
