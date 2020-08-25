<?php

namespace App\Http\Controllers;

use App\Supervisor;
use App\Materi;
use Illuminate\Http\Request;

class SupervisorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supervisors = Supervisor::latest()->paginate(5);
  
        return view('supervisors.index',compact('supervisors'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supervisors.create');
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
  
        Supervisor::create($request->all());
   
        return redirect()->route('supervisors.index')
                        ->with('success','Materi created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supervisor  $supervisor
     * @return \Illuminate\Http\Response
     */
    public function show(Supervisor $supervisor)
    {
        return view('supervisors.show',compact('supervisor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supervisor  $supervisor
     * @return \Illuminate\Http\Response
     */
    public function edit(Supervisor $supervisor)
    {
        return view('supervisors.edit',compact('supervisor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supervisor  $supervisor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supervisor $supervisor)
    {
        $request->validate([
            'materi' => 'required',
            'mapel' => 'required',
            'rombel' => 'required',
            'author' => 'required',
            'deskripsi' => 'required',
        ]);
  
        $supervisor->update($request->all());
  
        return redirect()->route('supervisors.index')
                        ->with('success','Materi updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supervisor  $supervisor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supervisor $supervisor)
    {
        $supervisor->delete();
  
        return redirect()->route('supervisors.index')
                        ->with('success','Materi deleted successfully');
    }
}
