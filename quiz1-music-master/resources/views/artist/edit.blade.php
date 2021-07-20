@extends('layouts.app')

@section('content')
<div class="container">

    <h3>Update Data</h3>
    <hr>
    <form method="POST" action="{{url('/artis/'.$data->id)}}">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="form-group">
            <label>ID</label>
            <input type="text" class="form-control col-1" name="id" value="{{$data->artist_id}}">
        </div>
        <div class="form-group">
            <label>Artist Name</label>
            <input type="text" class="form-control col-4" name="nama" value="{{$data->artist_name}}">
        </div>
        <button type="submit" class="btn btn-outline-warning">Update</button>
    </form>
</div>
@endsection