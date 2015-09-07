<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>@yield('title') | User Admin</title>
 
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
                  <a class="navbar-brand" href="#">Obama</a>
                </div>
            
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class=""><a href="{!! URL::to('/') !!}" target="_blank">Xem trang web</a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="{!! URL::to('auth/logout') !!}">Logout</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
            <div class='row'>
                @yield('content')
            </div>
        </div>
    </body>
</html>