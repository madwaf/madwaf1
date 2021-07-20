@extends('layouts.app')

@section('content')
<div class="container">

    <h3>Update Data</h3>
    <hr>
    <form method="POST" action="{{url('/play/'.$data3->id)}}">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="form-group">
            <label>Artist ID</label>
            <select name="artist_id" class="form-control col-3">
                <option selected value="{{$data3->artist_id}}">{{$data3->artist_id}}</option>
                <option>----------------------------</option>
                @foreach($data as $x)
                <option value="{{$x->artist_id}}">{{$x->artist_id." - ".$x->artist_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Album ID</label>
            <select name="album_id" class="form-control col-3">
                <option selected value="{{$data3->album_id}}">{{$data3->album_id}}</option>
                <option>----------------------------</option>
                @foreach($data1 as $z)
                <option value="{{$z->album_id}}">{{$z->album_id." - ".$z->album_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Track ID</label>
            <select name="track_id" class="form-control col-3">
                <option selected value="{{$data3->track_id}}">{{$data3->track_id}}</option>
                <option>----------------------------</option>
                @foreach($data2 as $y)
                <option value="{{$y->track_id}}">{{$y->track_id." - ".$y->track_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Played</label>
            <input type="text" class="form-control col-3" name="played" value="{{$data3->played}}">
        </div>
        <button type="submit" class="btn btn-outline-warning">Update</button>
    </form>
</div>
@endsection