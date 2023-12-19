@extends('backend.master')

@section('content')

<div class="container mt-5 col-md-9">
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">Carousel</div>
        </div>
        <div class="card-body">
            <form action="{{ url('/update/carousel') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="image">Carousel 1</label>
                    <img src="#" alt="Carousel image" height="70" width="150">
                    <span class="btn btn-dark" style="display:block;" onclick="document.getElementById('getFile').click()">Choose new one</span>
                    <input type="file"name="image" class="" id="getFile" style="display:none">
                </div>
                <div class="form-group">
                    <label for="image">Carousel 2</label>
                    <img src="#" alt="Carousel image" height="70" width="150">
                    <span class="btn btn-dark" style="display:block;" onclick="document.getElementById('getFile').click()">Choose new one</span>
                    <input type="file"name="image" class="" id="getFile" style="display:none">
                </div>
                <div class="form-group">
                    <label for="image">Carousel 3</label>
                    <img src="#" alt="Carousel image" height="70" width="150">
                    <span class="btn btn-dark" style="display:block;" onclick="document.getElementById('getFile').click()">Choose new one</span>
                    <input type="file"name="image" class="" id="getFile" style="display:none">
                </div>
                <button type="submit" class="btn btn-sm btn-primary mt-2">Update</button>
            </form>
        </div>
    </div>
    <div class="col-md-3 mt-5">
        <div class="card">
            <div class="card-header">Footer Partners</div>
        </div>
        <div class="card-body">
            <form action="{{ url('/update/footer') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="image">Partner 1</label>
                    <img src="#" alt="Partner image" height="70" width="150">
                    <span class="btn btn-dark" style="display:block;" onclick="document.getElementById('getFile').click()">Choose new one</span>
                    <input type="file"name="image" class="" id="getFile" style="display:none">
                </div>
                <div class="form-group">
                    <label for="image">Partner 2</label>
                    <img src="#" alt="Partner image" height="70" width="150">
                    <span class="btn btn-dark" style="display:block;" onclick="document.getElementById('getFile').click()">Choose new one</span>
                    <input type="file"name="image" class="" id="getFile" style="display:none">
                </div>
                <div class="form-group">
                    <label for="image">Partner 3</label>
                    <img src="#" alt="Partner image" height="70" width="150">
                    <span class="btn btn-dark" style="display:block;" onclick="document.getElementById('getFile').click()">Choose new one</span>
                    <input type="file"name="image" class="" id="getFile" style="display:none">
                </div>
                <button type="submit" class="btn btn-sm btn-primary mt-2">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection