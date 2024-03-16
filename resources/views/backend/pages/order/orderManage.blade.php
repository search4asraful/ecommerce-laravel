@extends('backend.master')

@section('content')

<div class="container mt-3">
    <div class="col-md-12">
        @if($orders->isEmpty())
            <p>No orders found.</p>
        @else
        <table class="table table-bordered">
            <tr>
                <th class="col-md-1">Order ID</th>
                <th class="col-md-6">Customer name</th>
                <th class="col-md-2">Status</th>
                <th class="col-md-1">Action</th>
            </tr>
                @php
                $uniqueOrders = $orders->unique('order_id');
                @endphp
                @foreach ($uniqueOrders as $uniqueOrder)
                    <tr>
                        <td>#{{ $uniqueOrder->order_id }}</td>
                        <td>{{ $uniqueOrder->order->name }}</td>
                        <td>{{ $uniqueOrder->status }}</td>
                        <td class="text-center">
                            <a href="{{ url('/manage/order/'.$uniqueOrder->order->id) }}" class="btn btn-sm btn-warning"><i class="fa-solid fa-pencil"></i></a>
                            <a href="{{ url('/order/invoice/'.$uniqueOrder->order->id) }}" class="btn btn-sm btn-info"><i class="fa-solid fa-file-invoice"></i></a>
                        </td>
                    </tr>
                @endforeach
        </table>
        @endif
    </div>
</div>

@endsection