<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>@yield('title')</title>
 
        <link rel="stylesheet" href="{!! URL::asset('css/bootstrap.min.css') !!}" />
        <link rel="stylesheet" href="{!! URL::asset('css/font-awesome.css') !!}" />
        <link rel="stylesheet" href="{!! URL::asset('css/custom.css') !!}" />
        <script src="{{ asset('/js/jquery.min.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.js') }}"></script>
    </head>
    <body>
        
        <div class='container'>
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="{!! URL::to('/') !!}">Obama nói gì về bạn ?</a>
                </div>
              </div><!-- /.container-fluid -->
            </nav>
            <div class='row'>
                @yield('content')
            </div>
        </div>
    </body>
</html>