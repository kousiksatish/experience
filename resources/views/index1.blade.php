<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="{{asset('/css/bootstrap1.min.css')}}" media="screen">
    <link rel="stylesheet" href="{{asset('/css/custom.min.css')}}">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
      <script src="../bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="/" class="navbar-brand">NIT Trichy</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            @yield('topbar')
          </ul>

          @if(Session::has('roll_number'))
          <ul class="nav navbar-nav navbar-right">
             <li><a href="#"><span class="glyphicon glyphicon-user"></span> Hi, {{ Session::get('roll_number') }}</a></li>
          </ul>
          
          @endif

        </div>
      </div>
    </div>


    <div class="container">

      

      @yield('content')

      <footer>
        <div class="row">
          <div class="col-lg-12">
          Made with &hearts; by Delta Force
          </div>
        </div>

      </footer>


    </div>


    <script src="{{asset('/js/jquery.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/custom.js')}}"></script>
  </body>
</html>
