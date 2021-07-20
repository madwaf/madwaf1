@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Artist</h3>
    <hr>
    <a href="{{url('artis/create')}}" class="btn btn-success mb-3">Add</a>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th class="text-center">Opsi</th>
            </tr>
        </thead>
        @foreach($rows as $x)
        <tr>
            <td>{{$x->artist_id}}</td>
            <td>{{$x->artist_name}}</td>
            <td class="text-center">
                <form action="{{url('artis/'.$x->id)}}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    @csrf
                    <a href="{{url('artis/'.$x->id.'/edit')}}" class="btn btn-sm btn-warning">Edit</a>
                    <button class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection