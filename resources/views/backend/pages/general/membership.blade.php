@extends('backend.master')

@section('content')
<main>
    <div class="mt-4 mx-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-decoration-none text-dark" href="{{ ('/home') }}">General</a></li>
            <li class="breadcrumb-item active" aria-current="page">Membership</li>
        </ol>
    </div><!-- End .container -->
        
    <div class="container mt-4">
        <div class="col-md-12 mx-auto">
        <div class="mb-3">
            <p>
                <strong>Membership members</strong>
            </p>
            <div class="row">
            @if ($memberships->isEmpty())
                <p>Currently you have no membership!</p>
            @else
                @foreach ($memberships as $membership)
                <div class="col-md-2 mx-auto mb-2">
                    <div class="container" style="position: relative;">
                        <div class="row">
                            <img src="{{ asset('/images/membership/'.$membership->image) }}" style="height: 100px; width:200px; object-fit:cover;" alt="membership image">
                            <p>{{ $membership->name }}</p>
                        </div><!-- End .row -->
                        <a href="{{ url('/membership/delete/'.$membership->id) }}">
                            <button type="submit" style="background: rgb(184, 4, 4); border: 0; outline: 0; border-radius: 05px; color: white; position: absolute; right: 5px; top: 5px;"><i class="fa-solid fa-trash-can"></i></button>
                        </a>
                    </div><!-- End .intro-content -->
                </div><!-- End .rounded -->
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
                <form action="{{ url('/create/membership') }}" method="post" enctype="multipart/form-data">
                    <p>
                        <strong>New membership form</strong>
                        <button type="submit" class="btn btn-sm btn-primary mt-2 float-end">Create new</button>
                    </p>
                    @csrf
                    <div class="form-group">
                        <div class="row">
                        <div class="col-md-6">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6">
                        <label for="image">Image</label>
                        <input type="file" id="" name="image" class="form-control shadow-none">
                        </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
    
@endsection