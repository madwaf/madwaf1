@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Add Data</h3>
    <hr>
    <form method="POST" action="{{url('/artis')}}">
        @csrf
        <div class="form-group">
            <label>ID</label>
            <input type="text" class="form-control col-1" name="id">
        </div>
        <div class="form-group">
            <label>Artist Name</label>
            <input type="text" class="form-control col-4" name="nama">
        </div>
        <button type="submit" class="btn btn-outline-success">Save</button>
    </form>
</div>
@endsection