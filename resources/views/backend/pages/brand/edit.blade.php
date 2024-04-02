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
                <strong>Succes!</strong> You have edited a brand.
                </div>
            @endif
                <div class="card">
                    <div class="card-header">Edit brand</div>
                </div>
                <div class="col-md-12">
                    <div class="card-body">
                        <form action="{{ url('/brand/update/'.$brand->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{ $brand->name }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control">
                                <img src="{{ asset('images/'.$brand->image) }}" alt="Brand image" height="60" width="60">
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