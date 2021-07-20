@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Add Data</h3>
    <hr>
    <form method="POST" action="{{url('/album')}}">
        @csrf
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
            <input type="text" class="form-control col-2" name="album_id">
        </div>
        <div class="form-group">
            <label>Album Name</label>
            <input type="text" class="form-control col-4" name="album_name">
        </div>
        <button type="submit" class="btn btn-outline-success">Save</button>
    </form>
</div>
@endsection