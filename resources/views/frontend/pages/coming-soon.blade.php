@extends('frontend.master')

@section('content')

<div class="soon">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="soon-content text-center">
                    <div class="soon-content-wrapper">
                        <img src="{{ asset('/frontend/') }}/assets/images/logo-icon.png" alt="Logo" width="50" class="soon-logo mx-auto">
                        <h1 class="soon-title">Coming Soon</h1><!-- End .soon-title -->
                        <div class="coming-countdown countdown-separator"></div><!-- End .coming-countdown -->
                        <hr class="mt-2 mb-3 mt-md-3">
                        <p>We are currently working on an awesome new site. Stay tuned for more information.
                            Subscribe to our newsletter to stay updated on our progress.</p>
                        <form action="#">
                            <div class="input-group mb-5">
                                <input type="email" class="form-control bg-transparent" placeholder="Enter your Email Address" required>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-primary-2" type="submit">
                                        <span>SUBSCRIBE</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="social-icons justify-content-center mb-0">
                            <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                            <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                            <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                            <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
                            <a href="#" class="social-icon" target="_blank" title="Pinterest"><i class="icon-pinterest"></i></a>
                        </div><!-- End .soial-icons -->
                    </div><!-- End .soon-content-wrapper -->
                </div><!-- End .soon-content -->
            </div><!-- End .col-md-9 -->
        </div><!-- End .row -->
    </div><!-- End .container -->
    <div class="soon-bg bg-image col-md-4" style="background-image: url({{ asset('/frontend/') }}/assets/images/backgrounds/soon-bg.jpg)"></div>
    
    <!-- End .soon-bg bg-image -->
</div><!-- End .soon -->

    <script>
    $(function() {
        "use strict";
        if ($.fn.countdown) {
            $('.coming-countdown').countdown({
                until: new Date(2024, 1, 1), // 7th month = August / Months 0 - 11 (January  - December)
                format: 'DHMS',
                padZeroes: true
            });

            // Pause
            // $('.coming-countdown').countdown('pause');
        }
    });
    </script>

@endsection