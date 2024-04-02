<footer class="py-3 bg-light mt-auto">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between">
            <div class="text-muted">Copyright &copy; {{ config('app.name', 'Electromart') }} {{ date('Y') }}</div>
            <div>
                <a href="{{ url('/privacy/policy') }}">Privacy Policy</a>
                &middot;
                <a href="{{ url('/terms-condition') }}">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>