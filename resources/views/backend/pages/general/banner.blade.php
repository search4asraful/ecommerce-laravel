@extends('backend.master')

@section('content')

<div class="container mt-5 col-md-9">
    <div class="col-md-9 mx-auto">
        <div class="card">
            <div class="card-header">Carousel</div>
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
                    {{-- <span class="btn btn-dark" style="display:block;" onclick="document.getElementById('getFile').click()">Choose new one</span> --}}
                    <input type="file"name="image" class="form-control" >
                </div>
                <button type="submit" class="btn btn-sm btn-primary mt-2">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection