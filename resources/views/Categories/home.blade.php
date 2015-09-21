@extends('categories')

@section('content')
<br><br>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
           Internships
            <small>Overview</small>
        </h1>
        
    </div>

</div>
<div class="col-sm-10">
@foreach($details as $det)
<div class="panel panel-primary">
<div class="panel-heading">
{{$det->name}}, {{$det->department}}
</div>
<div class="panel-body">
<div class="col-sm-10">
{{$columns[0]->col_name}} : {{$det->column1}}<br>
{{$columns[1]->col_name}} : {{$det->column2}}
</div>
<div class="col-sm-2">

<button class= "btn btn-primary" data-toggle="modal" data-target="#modal{{$det->id}}">Read more</button>


</div>
</div>
</div>

<div id="modal{{$det->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">{{$det->name}}, {{$det->department}}</h4>
      </div>
      <div class="modal-body">
        <b>Contact Number</b>
        <p>{{$det->rollno}}</p>
      	<b>{{$columns[2]->col_name}}</b>
        <p>{{$det->column3}}</p>
        <b>{{$columns[3]->col_name}}</b>
        <p>{{$det->column4}}</p>
        <b>{{$columns[4]->col_name}}</b>
        <p>{{$det->column5}}</p>
        <b>{{$columns[5]->col_name}}</b>
        <p>{{$det->column6}}</p>
        <b>{{$columns[6]->col_name}}</b>
        <p>{{$det->column7}}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

@endforeach
{!! $details->render() !!}					




</div>




@stop

