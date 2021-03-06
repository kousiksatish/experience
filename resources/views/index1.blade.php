<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="From what goes into prepping for that entrance test to what makes a successful scholarship application, we hope you'll find all your answers here. Cheers on your first step and good luck! ">
    <meta property="og:title"
	  content="Career guidance portal" />
    <meta property="og:site_name" content="Career guidance portal"/>
    <meta property="og:url"
	  content="https://www.pragyan.org/cg/" />
    <meta property="og:description" content="From what goes into prepping for that entrance test to what makes a successful scholarship application, we hope you'll find all your answers here. Cheers on your first step and good luck! "/>
    <meta property="og:type"   content="website" />
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
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-19500581-1', 'auto');
      ga('send', 'pageview');
    </script>
  </head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="{{action('HomeController@index')}}" class="navbar-brand">NIT Trichy</a>
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
