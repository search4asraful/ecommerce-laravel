@extends('backend.master')

@section('content')

<div class="container col-md-8 mt-4">
    <div class="card">
        <div class="card-header">Order monitor & edit</div>
    </div>
    <div class="card-body mt-2">
        <div>
            <table class="table table-bordered">
                <tr>
                    <th>Customar details</th>
                    <th>Order details</th>
                </tr>
                <tr>
                    <td class="col-md-6">
                        <strong>Name : </strong>{{ $order->order->name }}<br/>
                        <strong>Phone : </strong>{{ $order->order->phone }}<br/>
                        <strong>Email address: </strong>{{ $order->order->email }}<br/><br/>
                        <strong>Address : </strong>{{ $order->order->address }}
                    </td>
                    <td class="col-md-6">
                        <strong>Product name : </strong>{{ $order->product->name }}<br/>
                        <strong>Product quantity : </strong>{{ $order->qty }} pis
                    </td>
                </tr>
            </table>
        </div>
        <form action="{{ url('/order/update/'.$order->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="status">Order status</label>
                <select name="status" class="form-control">
                    <option value="{{ $order->status }}" selected>{{ $order->status }}</option>
                    <option value="shipped">Shipped</option>
                    <option value="delivered">Delivered</option>
                    <option value="canceled">canceled</option>
                </select>
            </div>
            <button type="submit" class="btn btn-sm btn-primary mt-2">Update</button>
        </form>
    </div>
</div>

@endsection