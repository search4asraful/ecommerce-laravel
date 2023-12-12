<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @include('frontend.includes.style')

    <style>
        * {
            border: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body {
            width: 85vw !important;
            height: 80vh !important;
            margin: auto;
        }
        nav {
            padding-bottom: 2rem;
        }
        nav img {
            width: 120px;
        }
        nav p {
            display: none;
            border-bottom: 1px black dashed;
        }
        th,td {
            border: 1px solid black !important;
            padding-left: 2rem !important;
            color: rgb(8, 8, 8) !important;
            font-size: 1.6rem;
        }
        th {
            font-weight: 600 !important;
        }
        td {
            padding-block: 0.5rem !important;
        }
        p {
            font-size: 1.6rem;
            color: black;
        }
        .fa-print {
            color: white !important;
        }
        @media print {
            nav p {
                display: block;
            }
            button {
                display: none !important;
            }
            th {
                font-size: 2rem !important;
            }
            td {
                font-size: 2rem !important;
            }
            p {
                font-size: 2rem !important;
            }
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <nav>
            <button class="btn btn-sm btn-danger border-0 float-right" onclick="window.print()"><i class="fa-solid fa-print text-light"></i> Print</button>
            <p class="float-right">Invoice</p>
            <a href="{{ url('/') }}" class="logo">
                <img src="{{ asset('/frontend/') }}/assets/images/demos/logo.svg" alt="brand Logo">
            </a>
        </nav>
        <div>
            <p><strong>Name :</strong>&ensp;{{ $orderInvoice->order->name }}</p>
            <p><strong>Phone :</strong>&ensp;{{ $orderInvoice->order->phone }}</p>
            <p><strong>Email :</strong>&ensp;{{ $orderInvoice->order->email }}</p>
            <p><strong>Address :</strong>&ensp;{{ $orderInvoice->order->address }}<span class="float-right">{{ date('d-M-Y h:i A', time() + 6 * 60 * 60) }}</span></p>
        </div>
        <div class="mt-2">
            <table class="table">
                <tr>
                    <th>SL</th>
                    <th>Products</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Payment method</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>{{ $orderInvoice->product->name }}</td>
                    <td>{{ $orderInvoice->qty }}</td>
                    <td>&#2547; {{ number_format($orderInvoice->order->total_price, 2) }}</td>
                    <td>{{ ucFirst($orderInvoice->order->payment_type) }}</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>