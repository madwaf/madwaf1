@extends('layouts.app')

@section('content')
<div class="container">

    <h3>Update Data</h3>
    <hr>
    <form method="POST" action="{{url('/track/'.$data2->id)}}">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="form-group">
            <label>Track ID</label>
            <input type="text" class="form-control col-2" name="track_id" value="{{$data2->track_id}}">
        </div>
        <div class="form-group">
            <label>Track Name</label>
            <input type="text" class="form-control col-4" name="track_name" value="{{$data2->track_name}}">
        </div>
        <div class="form-group">
            <label>Artist ID</label>
            <select name="artist_id" class="form-control col-3">
                <option selected value="{{$data2->artist_id}}">{{$data2->artist_id}}</option>
                <option>----------------------------</option>
                @foreach($data as $x)
                <option value="{{$x->artist_id}}">{{$x->artist_id." - ".$x->artist_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Album ID</label>
            <select name="album_id" class="form-control col-3">
                <option selected value="{{$data2->album_id}}">{{$data2->album_id}}</option>
                <option>----------------------------</option>
                @foreach($data1 as $z)
                <option value="{{$z->album_id}}">{{$z->album_id." - ".$z->album_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Time</label>
            <input type="text" class="form-control col-1" name="time" value="{{$data2->time}}">
        </div>
        <button type="submit" class="btn btn-outline-warning">Update</button>
    </form>
</div>
@endsection