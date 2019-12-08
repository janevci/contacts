@extends('layout')

@section('content')
<h3>Edit contact</h3>
<form action="\contacts\{{ $contact->id }}" method="POST">
    @method('PATCH')
    @csrf
    <div class="form-group">
        <input type="text" class="form-control contact-input" name="first_name" value="{{ $contact->first_name }}">
        <input type="text" class="form-control contact-input" name="last_name" value="{{ $contact->last_name }}">
        <input type="text" class="form-control contact-input" name="address" value="{{ $contact->address }}">
        <input type="text" class="form-control contact-input" name="city" value="{{ $contact->city }}">
        <input type="text" class="form-control contact-input" name="zip" value="{{ $contact->zip }}">
        <input type="text" class="form-control contact-input" name="country" value="{{ $contact->country }}">
        <input type="text" class="form-control contact-input" name="email" value="{{ $contact->email }}">
        <input type="text" class="form-control contact-input" name="phone" value="{{ $contact->phone }}">
        Choose group
        <select class="form-control contact-input" name="group_id">
            @forelse ($groups as $group)
                <option value="{{ $group->id }}"  @if ($group->id == $contact->group->id) selected @endif >{{ $group->name }}</option>
            @empty
                <option value="0">None</option>
            @endforelse
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection