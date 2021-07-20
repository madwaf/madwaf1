@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Add Data</h3>
    <hr>
    <form method="POST" action="{{url('/track')}}">
        @csrf
        <div class="form-group">
            <label>Track ID</label>
            <input type="text" class="form-control col-2" name="track_id">
        </div>
        <div class="form-group">
            <label>Track Name</label>
            <input type="text" class="form-control col-4" name="track_name">
        </div>
        <div class="form-group">
            <label>Artist ID</label>
            <select name="artist_id" class="form-control col-3">
                <option selected>Choose Artist ID</option>
                <option>----------------------------</option>
                @foreach($data as $x)
                <option value="{{$x->artist_id}}">{{$x->artist_id." - ".$x->artist_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Album ID</label>
            <select name="album_id" class="form-control col-3">
                <option selected>Choose Album ID</option>
                <option>----------------------------</option>
                @foreach($data1 as $z)
                <option value="{{$z->album_id}}">{{$z->album_id." - ".$z->album_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Time</label>
            <input type="text" class="form-control col-1" name="time" placeholder="02:30">
        </div>
        <button type="submit" class="btn btn-outline-success">Save</button>
    </form>
</div>
@endsection