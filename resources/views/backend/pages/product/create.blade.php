@extends('backend.layout.app')

@section('title')
    Create Product
@endsection

@section('body')
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title mb-4">Add Product</h3>
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-3">
                            <label class="col-form-label col-md-3">Product Name</label>
                            <div class="col-md-9">
                                <input type="text" name="name" class="form-control"/>
                                @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-form-label col-md-3">Price</label>
                            <div class="col-md-9">
                                <input type="text" name="price" class="form-control"/>
                                @error('price')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input3" class="col-sm-3 col-form-label">image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="form-control"/>
                                @error('image')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                        </div>

                

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Create Product</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection