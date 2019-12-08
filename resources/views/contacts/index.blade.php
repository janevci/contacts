@extends('layout')

@section('content')
<div class="container-fluid container-fluid-custom">
    <a class="btn btn-primary" href="\contacts\create" role="button">ADD CONTACT</a>
</div>
<table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>City</th>
                <th>Zip</th>
                <th>Country</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Group</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    {{-- <td>
                        <img src ="{{ asset('storage/avatars/' . $contact->avatar) }}" alt="Avatar">
                    </td> --}}
                    <td>{{ $contact->first_name }}</td>
                    <td>{{ $contact->last_name }}</td>
                    <td>{{ $contact->address }}</td>
                    <td>{{ $contact->city }}</td>
                    <td>{{ $contact->zip }}</td>
                    <td>{{ $contact->country }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>
                        <a href="\groups">
                            {{ $contact->group->name }}
                        </a>
                    </td>
                    <td class="btn-td">
                        <a class="btn btn-primary" href="\contacts\{{ $contact->id }}\edit" role="button">EDIT</a>
                    </td>
                    <td class="btn-td">
                         <form action="\contacts\{{ $contact->id }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                    </td>
                </tr>            
            @empty
                There is no contacts atm.
            @endforelse
        </tbody>
    </table>
    {{ $contacts->links() }}
@endsection