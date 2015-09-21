@extends('index1')

@section('topbar')
<li>
    <a href="{{action('HomeController@index')}}"> Home</a>
</li>

<li class="active">
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