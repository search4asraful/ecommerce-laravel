@extends('backend.master')

@section('content')

<div class="container mt-3">
    <div class="col-md-12">
        <a href="{{ url('/category/create') }}" class="btn btn-primary mb-2">Add category</a>
        <table class="table table-bordered">
            <tr>
                <th class="col-md-1">SL</th>
                <th class="col-md-7">Name</th>
                <th class="col-md-2">Image</th>
                <th class="col-md-2">Action</th>
            </tr>
            @foreach ($categories as $category)
            <tr class="align-middle">
                <td class="text-center">{{ $loop->index+1 }}</td>
                <td>{{ $category->name }}</td>
                <td class="text-center py-0">
                    <img src="{{ asset('images/'.$category->image) }}" alt="Category image" height="60" width="auto">
                </td>
                <td class="text-center">
                    <a href="{{ url('/category/edit/'.$category->id) }}" class="btn btn-info"><i class="fa-solid fa-pencil pe-2"></i>Edit</a>
                    <a href="{{ url('/category/delete/'.$category->id) }}" class="btn btn-danger"><i class="fa-regular fa-trash-can pe-2"></i>Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection