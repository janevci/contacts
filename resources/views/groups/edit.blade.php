@extends('layout')

@section('content')
<h3>Edit group</h3>
<form action="\groups\{{ $group->id }}" method="POST">
    @method('PATCH')
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" id="name" name="name" value="{{ $group->name }}">
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection