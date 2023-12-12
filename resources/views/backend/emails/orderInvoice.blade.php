<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order status</title>
</head>
<body>
    <h2>Your order status</h2>
    <p>Hello, {{ $order->order->name }}!</p>
    <p> your order has been successfully <span>{{ $order->status }}.</span></p>

    <p>Thank you!</p>
</body>
</html>