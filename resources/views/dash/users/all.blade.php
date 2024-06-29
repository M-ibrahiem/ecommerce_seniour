@extends('Custom Layouts.dash.app')

@section('page_title', 'Main Dashboard')
@section('content')

    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Bordered Table</h5>
                <p class="mb-40">Add class <code>.table-bordered</code> in table tag for borders on all sides of the table
                    and cells.</p>
                <div class="row">
                    <div class="col-sm">
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
                                                {{-- *Normal Way --}}
                                                {{-- <td>{{ $user->role }}</td> --}}
                                                {{-- *laratrust  --}}
                                                <td>
                                                    @if ($user->hasRole(['user', 'admin', 'super_admin']))
                                                        @foreach ($user->roles as $role)
                                                            {{ $role->display_name }}
                                                        @endforeach
                                                        {{-- *Normal Way --}}
                                                    @else
                                                        {{ $user->role }}
                                                    @endif

                                                </td>
                                                <td>
                                                    <a href="#" class="mr-25" data-toggle="tooltip"
                                                        data-original-title="Edit"> <i class="icon-pencil"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Close"> <i
                                                            class="icon-trash txt-danger"></i> </a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
@endsection
