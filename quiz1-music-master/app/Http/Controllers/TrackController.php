<?php

namespace App\Http\Controllers;

use App\Models\Track;
use App\Models\Artis;
use App\Models\Album;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Track::all();
        return view('track.index', compact('data'));
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
        return view('track.add', compact('data', 'data1'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Track::create([
            'track_id' => $request->track_id,
            'track_name' => $request->track_name,
            'artist_id' => $request->artist_id,
            'album_id' => $request->album_id,
            'time' => $request->time
        ]);

        return redirect('/track');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function show(Track $track)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Artis::all();
        $data1 = Album::all();
        $data2 = Track::findOrFail($id);

        return view('track.edit', compact('data', 'data1', 'data2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Track::findOrFail($id);
        $data->update([
            'track_id' => $request->track_id,
            'track_name' => $request->track_name,
            'artist_id' => $request->artist_id,
            'album_id' => $request->album_id,
            'time' => $request->time
        ]);

        return redirect('/track');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Track::findOrFail($id);
        $data->delete();

        return redirect('/track');
    }
}
