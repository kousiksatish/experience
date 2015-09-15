@extends('base')

@section('topbar')
<li>
    <a href="/"> Home</a>
</li>

<li class="active">
    <a href="/interns">Interns</a>
</li>

@if (Session::has('user_name')||Session::has('roll_number'))
    <li>
        <a href="/logout" >Logout</a>
    </li>

@else
    <li>
        <a href="/login" >Login</a>
    </li>

@endif
@stop