<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Admin</title>

        @include('backend.includes.style')

    </head>
    <body class="sb-nav-fixed">
        
        @include('backend.includes.header')

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                
                @include('backend.includes.sidebar')

            </div>
            <div id="layoutSidenav_content">
                <main>
                    @yield('content')
                </main>
                @include('backend.includes.footer')
            </div>
        </div>
        
        @include('backend.includes.script')

        @stack('script')
    </body>
</html>
