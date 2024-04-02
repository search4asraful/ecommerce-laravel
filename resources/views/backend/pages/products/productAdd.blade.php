@extends('backend.master')

@section('content')

<div class="container mt-3">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            @if ($errors->any())
                <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                </div>
            @endif
            @if (session()->has('succes'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>Succes!</strong> You have added a product.
                </div>
            @endif
                <div class="card">
                    <div class="card-header">Add product</div>
                </div>
                <div class="col-md-12">
                    <div class="card-body">
                        <form action="{{ url('/product/store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select name="category_id" id="" class="form-control">
                                    <option selected disabled>Select a category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="brand_id">brand</label>
                                <select name="brand_id" id="" class="form-control">
                                    <option selected disabled>Select a brand</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Product name</label>
                                <input type="text" name="name" placeholder="Product name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" min="0" name="price" class="form-control" placeholder="Example :&nbsp;$99">
                            </div>
                            <div class="form-group">
                                <label for="short_description">Short description</label>
                                <textarea type="text" rows="4" name="short_description" placeholder="Product short description..." class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="long_description">Long description</label>
                                <textarea name="long_description" rows="5" placeholder="Write a long description..." class="form-control ckeditor"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="badge">Badge (optional)</label>
                                <select name="badge" id="" class="form-control">
                                <option selected disabled>Select a badge type or left empty</option>
                                <option value="new">New</option>
                                <option value="top">Top</option>
                                <option value="hot">Hot</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="qty">Qty</label>
                                <input type="number" min="1" name="qty" placeholder="Product quantity" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-sm btn-dark mt-2">Add product</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>

@endsection

@push('script')
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>
@endpush