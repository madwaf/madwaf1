<?php

namespace App\Http\Controllers;

use App\Models\Played;
use App\Models\Artis;
use App\Models\Track;
use App\Models\Album;
use Illuminate\Http\Request;

class PlayedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Played::all();
        return view('played.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Artis::all();
        $data1 = Album::all();
        $data2 = Track::all();

        return view('played.add', compact('data', 'data1', 'data2'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Played::create([
            'artist_id' => $request->artist_id,
            'album_id' => $request->album_id,
            'track_id' => $request->track_id,
            'played' => $request->played
        ]);

        return redirect('/play');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Played  $played
     * @return \Illuminate\Http\Response
     */
    public function show(Played $played)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Played  $played
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Artis::all();
        $data1 = Album::all();
        $data2 = Track::all();
        $data3 = Played::findOrFail($id);

        return view('played.edit', compact('data', 'data1', 'data2', 'data3'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Played  $played
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Played::findOrFail($id);
        $data->update([
            'artist_id' => $request->artist_id,
            'album_id' => $request->album_id,
            'track_id' => $request->track_id,
            'played' => $request->played
        ]);

        return redirect('/play');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Played  $played
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Played::findOrFail($id);
        $data->delete();

        return redirect('/play');
    }
}
