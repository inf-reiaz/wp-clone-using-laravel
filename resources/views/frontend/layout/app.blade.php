<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','My WebSite')</title>

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    <link rel="stylesheet" href="/public/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/frontend/css/custom.css">
    @yield('css')
</head>
<body>
    
    @include('frontend.navs.top_nav')

    <div class="container">
        <div class="row">
            @yield('content')
            
            @include('frontend.partials.right_side_bar')
            
        </div>
    </div>
    
    @include('frontend.footer.footer')

    <script src="/public/frontend/js/bootstrap.min.js"></script>
    @yield('js')
</body>
</html>
