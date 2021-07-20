@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Played</h3>
    <hr>
    <a href="{{url('play/create')}}" class="btn btn-success mb-3">Add</a>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Artist ID</th>
                <th>Album ID</th>
                <th>Track ID</th>
                <th>Played</th>
                <th class="text-center">Opsi</th>
            </tr>
        </thead>
        @foreach($data as $x)
        <tr>
            <td>{{$x->artist_id}}</td>
            <td>{{$x->album_id}}</td>
            <td>{{$x->track_id}}</td>
            <td>{{$x->played}}</td>
            <td class="text-center">
                <form action="{{url('play/'.$x->id)}}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    @csrf
                    <a href="{{url('play/'.$x->id.'/edit')}}" class="btn btn-sm btn-warning">Edit</a>
                    <button class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection