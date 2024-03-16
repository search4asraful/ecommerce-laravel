@extends('frontend.master')

@section('content')

<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Terms & Condition</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->
    <style>
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        p {
            line-height: 1.6;
            margin-bottom: 15px;
        }
        strong {
            font-weight: bold;
        }
    </style>

    <div class="container">
        <h1>Terms and Conditions</h1>
        
        <p><strong>1. Acceptance of Terms</strong></p>
        <p>By accessing and using {{ config('app.name') }} the "Website", you agree to comply with and be bound by these terms and conditions of use the "Terms". If you do not agree with these Terms, please do not use the Website.</p>
        
        <p><strong>2. Privacy Policy</strong></p>

        <p>Your use of the Website is also governed by our Privacy Policy, which can be found at <a href="{{ url('/privacy') }}">privacy policy.</a></p>

        <p><strong>3. User Accounts</strong></p>

        <p>a. In order to access certain features of the Website, you may be required to create an account. You are responsible for maintaining the confidentiality of your account information and password.

        b. You agree to notify us immediately of any unauthorized use of your account or any other breach of security.</p>

        <p><strong>4. Product Information</strong></p>

        <p>a. We make every effort to ensure the accuracy of product information on the Website. However, we do not warrant that product descriptions, prices, or other content on the Website are accurate, complete, reliable, current, or error-free.

        b. We reserve the right to correct any errors, inaccuracies, or omissions and to change or update information at any time without prior notice.</p>

        <p><strong>5. Ordering and Payment</strong></p>

        <p>a. All orders placed through the Website are subject to acceptance by us. We reserve the right to refuse or cancel any order for any reason.

        b. Prices and availability of products are subject to change without notice.

        c. Payment must be made in full at the time of ordering. We accept "Internation and Local Payment methods".</p>

        <p><strong>6. Shipping and Delivery</strong></p>

        <p>a. We will make every effort to ensure timely delivery of your order. However, we are not responsible for delays that are beyond our control.

        b. Shipping costs and delivery times are provided at the time of checkout and may vary based on your location and the shipping method selected.</p>

        <p><strong>7. Returns and Refunds</strong></p>

        <p>a. Our return and refund policy is available at our <a href="javascript:void(0)">return policy.</a></p>

        <p><strong>8. Intellectual Property</strong></p>

        <p>a. All content on the Website, including text, graphics, logos, images, and software, is the property of {{ config('app.name') }} and is protected by intellectual property laws.

        b. You may not reproduce, distribute, display, or create derivative works of any content on the Website without our prior written permission.</p>

        <p><strong>9. Limitation of Liability</strong></p>

        <p>a. To the fullest extent permitted by law, {{ config('app.name') }} shall not be liable for any indirect, incidental, special, consequential, or punitive damages, or any loss of profits or revenues.</p>

        <p><strong>10. Governing Law</strong></p>

        <p>These Terms shall be governed by and construed in accordance with the laws of Whole country.</p>

        <p><strong>11. Changes to Terms</strong></p>
        <p>We reserve the right to change, modify, or revise these Terms at any time. Your continued use of the Website following the posting of changes will constitute your acceptance of such changes.</p>
        
        <p><strong>Contact Information:</strong></p>
        <p>{{ config('app.name') }}<br>
        [Your Address]<br>
        [Your Email]<br>
        [Your Phone Number]</p>
    </div>
</main>

@endsection