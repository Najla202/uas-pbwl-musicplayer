<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Played;
use App\Track;

class PlayedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $played['played'] = Played::all();
        return view('played.index')->with($played);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('played.add');
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
            'play_date' => 'required'
        ],
        [
            'play_date.required' => 'Nama wajib diisi'
        ]);

        Played::create([
            'track_id' => $request->track_id,
            'play_date' => $request->play_date
        ]);

        return redirect('album');
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
        $row = Played::findOrFail($id);
        return view('played.edit', compact('row'));
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
            'play_date' => 'required'
        ],
        [
            'play_date.required' => 'Nama wajib diisi'
        ]);

        $row = Played::findOrFail($id);
        $row->update([
            'play_id' => $request->play_id,
            'track_id' => $request->track_id,
            'play_date'=> $request->play_date
        ]);

        return redirect('played');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Played::findOrFail($id);
        $row->delete();

        return redirect('played');
    }
}
