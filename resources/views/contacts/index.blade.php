@extends('layout')

@section('content')
<table class="table">
        <div class="container-fluid container-fluid-custom">
            <a class="btn btn-primary" href="\contacts\create" role="button">ADD CONTACT</a>
        </div>
        <tbody>
            @php
            $i = 1
            @endphp
            @forelse ($contacts as $contact)
                <tr>
                    <th scope="row">{{ $i }}</th>
                    <td>{{ $contact->first_name }}</td>
                    <td>{{ $contact->last_name }}</td>
                    <td>{{ $contact->address }}</td>
                    <td>{{ $contact->city }}</td>
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
                @php
                $i++;
                @endphp
                
            @empty
                There is no contacts atm.
            @endforelse
        </tbody>
      </table>
@endsection