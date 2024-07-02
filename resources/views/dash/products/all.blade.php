@extends('Custom Layouts.dash.app')

@section('page_title', 'All products')
@section('content')

    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Bordered Table</h5>
                <p class="mb-40">Add class <code>.table-bordered</code> in table tag for borders on all sides of the table and cells.</p>
                <a class="btn btn-primary" href="{{ route('dashboard.proudcts.create') }}">ADD Product</a>
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
                                            <th>Name ar</th>
                                            <th>Name en</th>
                                            <th>Description ar</th>
                                            <th>Description en</th>
                                            <th>price</th>
                                            <th>Image</th>
                                            <th>Related Category</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $serial = 1;
                                    @endphp
                                    @foreach ($data as $product)
                                        <tr>
                                                <td>{{ $serial++ }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->name_ar }}</td>
                                                <td>{{ $product->description }}</td>
                                                <td>{{ $product->description_ar }}</td>
                                                <td>{{ $product->price }}</td>
                                                <td>{{ $product->category  }}</td>
                                                <td>
                                                    <img width="150" height="150" src="{{ asset('uploads/proudct/' . $product->image) }}" alt="{{ $product->name }}">
                                                    {{-- <img src="{{ Storage::url('products/' . $product->image) }}" alt="{{ $product->name }}"> --}}
                                                    {{-- <img src="{{ asset('storage/products/' . $product->image) }}" alt="{{ $product->name }}"> --}}


                                                </td>
                                                <td>
                                                    <form action="{{ route('dashboard.products.edit', $product->id) }}" method="POST" enctype="multipart/form-data">
                                                        <i class="icon-pencil" style="color: rgb(0, 81, 255);"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Delete" onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this product?')) { document.getElementById('delete-form-{{ $product->id }}').submit(); }">
                                                        <i class="icon-trash text-danger"></i>
                                                    </a>
                                                    <form id="delete-form-{{ $product->id }}" action="{{ route('dashboard.proudcts.destroy', $product->id) }}" method="POST" style="display: none;">
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
