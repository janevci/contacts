@extends('layout')

@section('content')

    <h3>Add new group</h3>
    <form action="\groups" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter group name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection