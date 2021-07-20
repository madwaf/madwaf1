@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Track</h3>
    <hr>
    <a href="{{url('track/create')}}" class="btn btn-success mb-3">Add</a>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Track ID</th>
                <th>Track Name</th>
                <th>Artist ID</th>
                <th>Album ID</th>
                <th>Time</th>
                <th class="text-center">Opsi</th>
            </tr>
        </thead>
        @foreach($data as $x)
        <tr>
            <td>{{$x->track_id}}</td>
            <td>{{$x->track_name}}</td>
            <td>{{$x->artist_id}}</td>
            <td>{{$x->album_id}}</td>
            <td>{{$x->time}}</td>
            <td class="text-center">
                <form action="{{url('track/'.$x->id)}}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    @csrf
                    <a href="{{url('track/'.$x->id.'/edit')}}" class="btn btn-sm btn-warning">Edit</a>
                    <button class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection