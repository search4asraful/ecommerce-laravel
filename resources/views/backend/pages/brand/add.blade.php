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
                <strong>Succes!</strong> You have created a brand.
                </div>
            @endif
                <div class="card">
                    <div class="card-header">Add brand</div>
                </div>
                <div class="col-md-12">
                    <div class="card-body">
                        <form action="{{ url('/brand/store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" placeholder="Brand name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-sm btn-dark mt-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>

@endsection