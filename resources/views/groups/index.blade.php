@extends('layout')

@section('content')
<div class="container-fluid container-fluid-custom">
    <a class="btn btn-primary" href="\groups\create" role="button">ADD GROUP</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th class="w-10">#</th>
            <th class="w-50">Name</th>
            <th class="w-10"></th>
            <th class="w-10"></th>
          </tr>
    </thead>
    <tbody>
        @php
        $i = 1
        @endphp
        @forelse ($groups as $group)
            <tr>
                <td>{{ $group->id }}</td>
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