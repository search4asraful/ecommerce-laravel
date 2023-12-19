<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Checkout Receipt</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto mt-5">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Order Receipt</h2>
                        
                        <!-- Billing Address -->
                        <h4 class="mt-4">Billing Address</h4>
                        <p><strong>Name:</strong> {{ $order->name }}</p>
                        <p><strong>Address:</strong> {{ $order->address }}</p>
                        <p><strong>Email:</strong> {{ $order->email }}</p>
                        
                        <!-- Order Details -->
                        <h4 class="mt-4">Order Details</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Product name</td>
                                    <td>Order qty</td>
                                    <td>Order price</td>
                                </tr>
                                <tr>
                                    <td><strong>Total Amount:</strong></td>
                                    <td><strong>$55</strong></td>
                                </tr>
                                <!-- Add more rows for additional products -->
                            </tbody>
                        </table>
                        
                        
                        
                        <!-- Additional Information -->
                        <p class="mt-4">Thank you for your purchase! If you have any questions, please contact our support.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>