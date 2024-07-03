@extends('Custom Layouts.dash.app')

@section('page_title', 'Add Product')
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

                    <form action="{{ route('dashboard.products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf


                        <img src="{{ asset('uploads/product/Default Product.png') }}" alt="" id="img-prv" width="250" height="250" alt="image">
                        <div class="form-group">
                            <label class="control-label mb-10" for="exampleInputuname_1">Product Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-Product"></i></span>
                                </div>
                                <input name="name" value="{{ old('name') }}" type="text" class="form-control" id="exampleInputuname_1" placeholder="Productname">
                            </div>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-10" for="exampleInputuname_1">Product Name ar</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-Product"></i></span>
                                </div>
                                <input name="name_ar" value="{{ old('name_ar') }}" type="text" class="form-control" id="exampleInputuname_ar_1" placeholder="Productname_ar">
                            </div>
                            @error('name_ar')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-10" for="exampleInputEmail_1">Product Description</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-envelope-open"></i></span>
                                </div>
                                <input name="description" value="{{ old('description') }}" type="text" class="form-control" id="exampleInputdescription_1" placeholder="Enter description">
                            </div>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-10" for="exampleInputEmail_1">Product Description ar</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-envelope-open"></i></span>
                                </div>
                                <input name="description_ar" value="{{ old('description_ar') }}" type="text" class="form-control" id="exampleInputdescription_ar_1" placeholder="Enter description_ar">
                            </div>
                            @error('description_ar')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-10" for="exampleInputEmail_1">Product Price</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-envelope-open"></i></span>
                                </div>
                                <input name="price" value="{{ old('price') }}" type="number" class="form-control" id="exampleInputprice_1" placeholder="Enter price">
                            </div>
                            @error('price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-10" for="exampleInputEmail_1">Related Category</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-envelope-open"></i></span>
                                </div>
                                <select name="category_id" class="form-control" id="exampleInputRelatedCategory_1">
                                    <option value= "">Choose</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('category_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-10" for="exampleInputpwd_1">Image</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-lock"></i></span>
                                </div>
                                <input onchange="showPreview(event)" name="image" type="file" class="form-control" id="exampleInputpwd_1" placeholder="Enter image">
                            </div>
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <script>
                            function showPreview(event) {
                                let file = event.target.files[0];
                                if (file.type.startsWith('image/')) {
                                    let src = URL.createObjectURL(file);
                                    let prv = document.getElementById('img-prv');
                                    prv.src = src;
                                } else {
                                    alert('Please select a valid image file.');
                                }
                            }
                        </script>

                    <button type="submit" class="btn btn-primary mr-10">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection
