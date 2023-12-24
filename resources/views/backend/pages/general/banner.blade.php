@extends('backend.master')

@section('content')
<main>
    <div class="mt-4 mx-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-decoration-none text-dark" href="{{ ('/home') }}">General</a></li>
            <li class="breadcrumb-item active" aria-current="page">Banner</li>
        </ol>
    </div><!-- End .container -->
        
    <div class="container mt-4">
        <div class="col-md-12 mx-auto">
        <div class="mb-3">
            <p>
                <strong>Carousels</strong>
            </p>
            <div class="row">
            @if ($banners->isEmpty())
                <p>Currently you have no carousel!</p>
            @else
                @foreach ($banners as $banner)
                <div class="col-md-4 mx-auto mb-2">
                <div style="background-image: url({{ ('/images/banner/').$banner->image }}); background-size:cover;">
                    <div class="container" style="background-color: rgba(0, 0, 0, 0.50); color: white; height:150px; text-align: center; align-content:center; display:flex; align-items:center; position: relative;">
                        <div class="row">
                            <p>{{ $banner->heading }}</p><!-- End .h3 intro-subtitle -->
                            <p>{{ $banner->name }}</p>
                            <span>
                                <sup>{{ $banner->pricetag }}</sup>
                                <span>&#2547;{{ $banner->price }}<sup>.00</sup>
                                </span>
                            </span><!-- End .intro-price -->
                        </div><!-- End .row -->
                        <a href="{{ url('/banner/delete/'.$banner->id) }}">
                            <button type="submit" style="background: rgb(184, 4, 4); border: 0; outline: 0; border-radius: 05px; color: white; position: absolute; right: 5px; top: 5px;"><i class="fa-solid fa-trash-can"></i></button>
                        </a>
                        </div><!-- End .intro-content -->
                    </div><!-- End .rounded -->
                </div>
                @endforeach
                @endif
            </div>
        </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="card-body">
                <form action="{{ url('/create/banner') }}" method="post" enctype="multipart/form-data">
                    <p>
                        <strong>Carousel banner create form</strong>
                        <button type="submit" class="btn btn-sm btn-primary mt-2 float-end">Create new</button>
                    </p>
                    @csrf
                    <div class="form-group">
                        <div class="row">
                        <div class="col-md-6">
                        <label for="heading">Heading</label>
                        <input type="text" name="heading" id="heading" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                            <label for="price">Price</label>
                            <input type="number" name="price" id="price" class="form-control"><br/>
                        </div>
                        <div class="col-md-6">
                            <label for="pricetag">Tag (for price use "৳" first or text)</label>
                            <input type="text" name="pricetag" id="pricetag" class="form-control">
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6">
                        <label for="image">link (else #)</label>
                        <input type="text" name="link" class="form-control shadow-none">
                        </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
    
@endsection