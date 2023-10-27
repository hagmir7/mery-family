@extends('layout.dash')


@section('content')

<style>
    a{
        text-decoration: none!important;
    }
</style>
<div class="table-responsive  overflow-auto">


    <table id="mytable" class="table table-bordred table-striped">
        <h4>User ({{ $users->count() }})</h4>
        <div class="d-flex justify-content-between">
            <p><a class="btn btn-primary btn-sm" href="{{ route('register') }}">+ Add User</a></p>
        </div>
        <thead>

            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                <td>{{ $user->email }}</td>
                <td>@if ($user->role) <i class="bi bi-check2-circle h5 text-success"></i> @else <i class="bi bi-x-octagon h5 text-danger"></i>@endif</td>
                <td>
                    <a href="{{ route('user.update', $user->id) }}" class="btn btn-primary btn-sm btn-xs"> <i class="bi bi-eye"></i> </a>
                    <a href="{{ route('user.delete', $user->id) }}" onclick="return confirm('Are you sur you want to delete user?')" class="btn btn-danger btn-sm btn-xs"> <i class="bi bi-trash"></i> </a>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
    {{ $users->links() }}
</div>
@endsection
