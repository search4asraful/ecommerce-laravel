@extends('backend.master')

@section('content')

<div class="container mt-3">
    <div class="col-md-12">
        <a href="{{ url('/brand/create') }}" class="btn btn-primary mb-2">Add brand</a>
        <table class="table table-bordered">
            <tr>
                <th class="col-md-1">SL</th>
                <th class="col-md-7">Name</th>
                <th class="col-md-2">Image</th>
                <th class="col-md-2">Action</th>
            </tr>
            @foreach ($brands as $brand)
            <tr class="align-middle">
                <td class="text-center">{{ $loop->index+1 }}</td>
                <td>{{ $brand->name }}</td>
                <td class="text-center py-0">
                    <img src="{{ asset('images/'.$brand->image) }}" alt="Brand image" height="60" width="auto">
                </td>
                <td class="text-center">
                    <a href="{{ url('/brand/edit/'.$brand->id) }}" class="btn btn-small btn-info"><i class="fa-solid fa-pencil"></i></a>
                    <a href="{{ url('/brand/delete/'.$brand->id) }}" class="btn btn-small btn-danger"><i class="fa-regular fa-trash-can"></i></a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection