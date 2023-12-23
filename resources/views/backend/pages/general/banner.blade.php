@extends('backend.master')

@section('content')
<main>
    <div class="mt-4 mx-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-decoration-none text-dark" href="{{ ('/home') }}">General</a></li>
            <li class="breadcrumb-item active" aria-current="page">Banner</li>
        </ol>
    </div><!-- End .container -->
    <div class="container mt-5 col-md-9">
        <div class="col-md-9 mx-auto">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="card">
                <div class="card-header">Add banner</div>
            </div><br/>
            <div class="card-body">
                <form action="{{ url('/update/banner') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control"><br/>
                        <label for="price">Price</label>
                        <input type="number" name="price" id="price" class="form-control"><br/>
                        <label for="heading">Heading</label>
                        <input type="text" name="heading" id="heading" class="form-control"><br/>
                        <label for="pricetag">Price tag</label>
                        <input type="text" name="pricetag" id="pricetag" class="form-control"><br/>
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control shadow-none">
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary mt-2">Update</button>
                </form>
            </div>
        </div>
    </div>
</main>
    
@endsection