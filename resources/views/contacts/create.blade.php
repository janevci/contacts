@extends('layout')

@section('content')
<h3>Add new ontact</h3>
<form action="\contacts" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control contact-input" name="first_name" placeholder="Enter contact first name">
        <input type="text" class="form-control contact-input" name="last_name" placeholder="Enter contact last name">
        <input type="text" class="form-control contact-input" name="address" placeholder="Enter contact address">
        <input type="text" class="form-control contact-input" name="city" placeholder="Enter contact city">
        <input type="text" class="form-control contact-input" name="zip" placeholder="Enter contact zip">
        <input type="text" class="form-control contact-input" name="country" placeholder="Enter contact country">
        <input type="text" class="form-control contact-input" name="email" placeholder="Enter contact email">
        <input type="text" class="form-control contact-input" name="phone" placeholder="Enter contact phone">
        Choose group
        <select class="form-control contact-input" name="group_id">
            @forelse ($groups as $group)
                <option value="{{ $group->id }}">{{ $group->name }}</option>
            @empty
                <option value="0">None</option>
            @endforelse
        </select>
        Upload avatar <br>
        <input type="file" name="avatar" id="avatar" class="form-control contact-input">
        Note
        <textarea name="note" class="form-control contact-input" cols="30" rows="10" placeholder="Enter contact note"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection