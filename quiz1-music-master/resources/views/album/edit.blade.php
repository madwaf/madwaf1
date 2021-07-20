@extends('layouts.app')

@section('content')
<div class="container">

    <h3>Update Data</h3>
    <hr>
    <form method="POST" action="{{url('/album/'.$data->id)}}">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="form-group">
            <label>Artist ID</label>
            <select name="artist_id" class="form-control col-3">
                <option selected value="{{$data->artist_id}}">{{$data->artist_id}}</option>
                <option>----------------------------</option>
                @foreach($data1 as $x)
                <option value="{{$x->artist_id}}">{{$x->artist_id." - ".$x->artist_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Album ID</label>
            <input type="text" class="form-control col-2" name="album_id" value="{{$data->album_id}}">
        </div>
        <div class="form-group">
            <label>Album Name</label>
            <input type="text" class="form-control col-4" name="album_name" value="{{$data->album_name}}">
        </div>
        <button type="submit" class="btn btn-outline-warning">Update</button>
    </form>
</div>
@endsection