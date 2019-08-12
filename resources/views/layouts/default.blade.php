<!doctype html>
<html>
<head>
    
    @include('includes.head')
</head>
<body>
<div class="row col-md-12">
        <div id="wrapper">

    {{--  <div class="theme-loader">
        <div class="loader-track">
        <div class="loader-bar"></div>
        </div>
        </div>  --}}
        
    <div id="main" class="row">


            @yield('content')

            <div class="row">
                @include('includes.footer')
            </div>

    </div>

    
        </div>
</div>


</body>
</html>
