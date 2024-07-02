@extends('Custom Layouts.dash.app')

@section('page_title', 'All Categories')
@section('content')

    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Bordered Table</h5>
                <p class="mb-40">Add class <code>.table-bordered</code> in table tag for borders on all sides of the table and cells.</p>
                <a class="btn btn-primary" href="{{ route('dashboard.categories.create') }}">ADD Categorey</a>
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
                                            <th>Sub Title</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $serial = 1;
                                    @endphp
                                    @foreach ($data as $category)
                                        <tr>
                                            <td>{{ $serial++ }}</td>
                                                <td>{{ $category->name }}</td>
                                                <td>{{ $category->sub_title }}</td>
                                                <td>
                                                    <img width="150" height="150" src="{{ asset('uploads/category/' . $category->image) }}" alt="{{ $category->name }}">
                                                    {{-- <img src="{{ Storage::url('categories/' . $category->image) }}" alt="{{ $category->name }}"> --}}
                                                    {{-- <img src="{{ asset('storage/categories/' . $category->image) }}" alt="{{ $category->name }}"> --}}


                                                </td>
                                                <td>
                                                    <a href="{{ route('dashboard.categories.edit', $category->id  ) }}" class="mr-25" data-toggle="tooltip" data-original-title="Edit">
                                                        <i class="icon-pencil" style="color: rgb(0, 81, 255);"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Delete" onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this category?')) { document.getElementById('delete-form-{{ $category->id }}').submit(); }">
                                                        <i class="icon-trash text-danger"></i>
                                                    </a>
                                                    <form id="delete-form-{{ $category->id }}" action="{{ route('dashboard.categories.destroy', $category->id) }}" method="POST" style="display: none;">
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
