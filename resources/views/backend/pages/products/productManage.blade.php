@extends('backend.master')

@section('content')

<div class="container mt-3">
    <div class="col-md-12">
        <a href="{{ url('/product/productAdd') }}" class="btn btn-primary mb-2">Add product</a>
        <table class="table table-bordered">
            <tr>
                <th>SL</th>
                <th>Category</th>
                <th>Brand</th>
                <th>Product name</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            @foreach ($products as $product)
            <tr class="align-middle">
                <td class="text-center">{{ $loop->index+1 }}</td>
                <td class="text-center">{{ $product->category->name }}</td>
                <td class="text-center">{{ $product->brand->name }}</td>
                <td>{{ Str::substr($product->name, 0, 50) }}</td>
                <td><span style="font-size: 1.4rem;">&#2547;</span>{{ number_format($product->price, 2) }}</td>
                <td>{{ $product->qty }} <span class="float-end">pis&emsp;</span></td>
                <td class="text-center py-0">
                    <img src="{{ url('images/'.$product->image) }}" alt="product image" height="60" width="auto">
                </td>
                <td class="text-center">
                    <a href="{{ url('/product/edit/'.$product->id) }}" class="btn btn-small btn-info"><i class="fa-solid fa-pencil"></i></a>
                    <a href="{{ url('/product/delete/'.$product->id) }}" class="btn btn-small btn-danger"><i class="fa-regular fa-trash-can"></i></a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection