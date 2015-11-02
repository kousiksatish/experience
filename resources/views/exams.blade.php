@extends('index1')

@section('title')
Career Guidance Portal
@stop

@section('topbar')
<li>
    <a href="{{action('HomeController@index')}}"> Home</a>
</li>

<li>
    <a href="{{action('InternsController@index')}}">Interns</a>
</li>

<li class="active">
    <a href="{{action('ExamsController@index')}}">Entrance Exams</a>
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