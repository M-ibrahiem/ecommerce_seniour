@extends('Custom Layouts.dash.app')

@section('page_title', 'Main Dashboard')
@section('content')

    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Bordered Table</h5>
                <p class="mb-40">Add class <code>.table-bordered</code> in table tag for borders on all sides of the table and cells.</p>
                <a class="btn btn-primary" href="{{ route('dashboard.users.create') }}">ADD USER</a>
                <div class="row">
                    <div class="col-sm">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered mb-0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    @if ($user->hasRole(['user', 'admin', 'super_admin']))
                                                        @foreach ($user->roles as $role)
                                                            {{ $role->display_name }}
                                                        @endforeach
                                                    @else
                                                        {{ $user->role }}
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('dashboard.users.edit', $user->id) }}" class="mr-25" data-toggle="tooltip" data-original-title="Edit">
                                                        <i class="icon-pencil" style="color: rgb(0, 81, 255);"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Delete" onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this user?')) { document.getElementById('delete-form-{{ $user->id }}').submit(); }">
                                                        <i class="icon-trash text-danger"></i>
                                                    </a>
                                                    <form id="delete-form-{{ $user->id }}" action="{{ route('dashboard.users.destroy', $user->id) }}" method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $data->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
