@extends('index1')

@section('title')
  Career Guidance Portal
@stop

@section('topbar')
  <li class="active">
    <a href="{{action('HomeController@index')}}"> Home</a>
  </li>

  <li>
    <a href="{{action('InternsController@index')}}">Interns</a>
  </li>

  @if (Session::has('user_name')||Session::has('roll_number'))
    <li>
      <a href="{{action('HomeController@logout')}}" >Logout</a>
    </li>

  @else
    <li>
      <a href="{{action('HomeController@login')}}" >Login</a>
    </li>

  @endif
@stop

@section('content')
  <br/> <br/>
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">
	Career Guidance Portal
      </h1>

      <p>
	Welcome to the career guidance portal. From what goes into prepping for that entrance test to what makes a successful scholarship application, we hope you'll find all your answers here. Cheers on your first step and good luck!
      </p>
      <p>
	<a href="{{action('InternsController@index')}}">Click here</a> to view information on internships.
      </p>
    </div>
  </div>
@stop