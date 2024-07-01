@extends('Custom Layouts.dash.app')

@section('page_title', 'Add category')
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

                    <form action="{{ route('dashboard.categories.store') }}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        <img src="" id="img-prv" width="250" height="250" alt="image">
                        <div class="form-group">
                            <label class="control-label mb-10" for="exampleInputuname_1">category Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-category"></i></span>
                                </div>
                                <input name="name" value="{{ old('name') }}" type="text" class="form-control" id="exampleInputuname_1" placeholder="categoryname">
                            </div>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label mb-10" for="exampleInputEmail_1">Sub Title address</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-envelope-open"></i></span>
                                </div>
                                <input name="sub_title" value="{{ old('sub_title') }}" type="text" class="form-control" id="exampleInputsub_title_1" placeholder="Enter sub_title">
                            </div>
                            @error('sub_title')
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
