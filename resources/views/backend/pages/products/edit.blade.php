@extends('backend.master')

@section('content')

<div class="container mt-3">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            @if ($errors->any())
                <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                </div>
            @endif
            @if (session()->has('succes'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>Succes!</strong> You have edited a product.
                </div>
            @endif
                <div class="card">
                    <div class="card-header">Edit product</div>
                </div>
                <div class="col-md-12">
                    <div class="card-body">
                        <form action="{{ url('/product/update/'.$product->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select name="category_id" class="form-control">
                                    <option value="{{ $product->category->id }}" selected>{{ $product->category->name }}</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{ $product->name }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" min="0" name="price" value="{{ $product->price }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="qty">Qty</label>
                                <input type="number" min="0" name="qty" value="{{ $product->qty }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="badge">Badge</label>
                                <select name="badge" id="" class="form-control">
                                    <option selected disabled>Select a badge</option>
                                    <option value="new">New</option>
                                    <option value="hot">Hot</option>
                                    <option value="top">Top</option>
                                    <option value="out">Out of stock</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control">
                                <img src="{{ asset('images/'.$product->image) }}" alt="product image" height="60" width="60">
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary mt-2">Update</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>

@endsection