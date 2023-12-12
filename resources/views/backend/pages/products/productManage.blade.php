@extends('backend.master')

@section('content')

<div class="container mt-3">
    <div class="col-md-12">
        <a href="{{ url('/product/productAdd') }}" class="btn btn-primary mb-2">Add product</a>
        <table class="table table-bordered">
            <tr>
                <th class="col-md-1">SL</th>
                <th class="col-md-2">Category</th>
                <th class="col-md-4">Product name</th>
                <th class="col-md-1">Price</th>
                <th class="col-md-1">Qty</th>
                <th class="col-md-1">Image</th>
                <th class="col-md-2">Action</th>
            </tr>
            @foreach ($products as $product)
            <tr class="align-middle">
                <td class="text-center">{{ $loop->index+1 }}</td>
                <td class="text-center">{{ $product->category->name }}</td>
                <td>{{ $product->name }}</td>
                <td><span style="font-size: 1.4rem;">&#2547;</span>{{ number_format($product->price, 2) }}</td>
                <td>{{ $product->qty }} <span class="float-end">pis&emsp;</span></td>
                <td class="text-center py-0">
                    <img src="{{ url('images/'.$product->image) }}" alt="product image" height="60" width="auto">
                </td>
                <td class="text-center">
                    <a href="{{ url('/product/edit/'.$product->id) }}" class="btn btn-small btn-info"><i class="fa-solid fa-pencil pe-2"></i>Edit</a>
                    <a href="{{ url('/product/delete/'.$product->id) }}" class="btn btn-small btn-danger"><i class="fa-regular fa-trash-can pe-2"></i>Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection