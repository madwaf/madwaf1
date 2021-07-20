<?php

namespace App\Http\Controllers;

use App\Models\Artis;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Artis::all();
        return view('artist.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artist.add');
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
            'id' => 'required|unique:artists',
            'nama' => 'required'
        ], [
            'id.required' => 'ID Wajib di isi',
            'id.unique' => 'ID Sudah di Gunakan',
            'nama.require' => 'Nama Wajib di isi'
        ]);

        Artis::create([
            'artist_id' => $request->id,
            'artist_name' => $request->nama
        ]);

        return redirect('/artis');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artis  $artis
     * @return \Illuminate\Http\Response
     */
    public function show(Artis $artis)
    {
        //
    }

    public function edit($id)
    {
        $data = Artis::findOrFail($id);
        return view('artist.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artis  $artis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Artis::findOrFail($id);
        $data->update([
            'artist_id' => $request->id,
            'artist_name' => $request->nama
        ]);
        return redirect(('/artis'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artis  $artis
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Artis::findOrFail($id);
        $data->delete();
        return redirect('/artis');
    }
}
