@extends('layout')

@section('content')
<table class="table">
    <div class="container-fluid container-fluid-custom">
        <a class="btn btn-primary" href="\groups\create" role="button">ADD GROUP</a>
    </div>
    <tbody>
        @php
        $i = 1
        @endphp
        @forelse ($groups as $group)
            <tr>
                <th scope="row">{{ $i }}</th>
                <td>{{ $group->name }}</td>
                <td class="btn-td">
                    <a class="btn btn-primary" href="\groups\{{ $group->id }}\edit" role="button">EDIT</a>
                </td>
                <td class="btn-td">
                     <form action="\groups\{{ $group->id }}" method="POST">
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
            There is no groups atm.
        @endforelse
    </tbody>
  </table>
@endsection