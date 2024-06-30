@extends('Custom Layouts.dash.app')

@section('page_title', 'Add User')
@section('content')

<div class="row">
    <div class="col-xl-12">

        <section class="hk-sec-wrapper">
            <h5 class="hk-sec-title">Form with icon</h5>
            <p class="mb-25">Place an icon inside add-on on either side of an input. You may also place one on rightside of an input.</p>
            <div class="row">
                <div class="col-sm">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('dashboard.users.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="control-label mb-10" for="exampleInputuname_1">User Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-user"></i></span>
                                </div>
                                <input name="name" value="{{ old('name') }}" type="text" class="form-control" id="exampleInputuname_1" placeholder="Username">
                            </div>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-10" for="exampleInputEmail_1">Email address</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-envelope-open"></i></span>
                                </div>
                                <input name="email" value="{{ old('email') }}" type="email" class="form-control" id="exampleInputEmail_1" placeholder="Enter email">
                            </div>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-10" for="exampleInputpwd_1">Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-lock"></i></span>
                                </div>
                                <input name="password" type="password" class="form-control" id="exampleInputpwd_1" placeholder="Enter password">
                            </div>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="role">User Role</label>
                            <select name="role" class="form-control custom-select d-block w-100" id="role">
                                <option value="">Choose...</option>
                                @foreach ($roles as $role)
                                    <option @if (old('role') == $role->name) selected @endif value="{{ $role->name }}">{{ $role->display_name }}</option>
                                @endforeach
                            </select>
                            @error('role')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mr-10">Submit</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection
