@extends('exams')

@section('content')
<br><br>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
           Entrance Exams
            <small>Overview</small>
        </h1>
        
    </div>

</div>

<div class="row">
<div class="col-sm-10">
@foreach($details as $det)
<div class="panel panel-primary">
<div class="panel-heading">
{{$det->name}}, {{$det->department}}
</div>
<div class="panel-body">
<div class="col-sm-9">
<b>Exam</b> : {{$det->exam}}<br>
<b>Rank/Score/Percentile</b> : {{$det->score}}
</div>
<div class="col-sm-3">

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
        @if($det->exam)
        <p><b>Exam</b> : {{$det->exam}}</p>
        @endif
        @if($det->when_prep)
        <p><b>When should you start your preparation for the exam</b> : {{$det->when_prep}}</p>
        @endif
        @if($det->classes)
        <p><b>Classes Offline/Online for preparation</b> : {{$det->classes}}</p>
        @endif
        @if($det->materials)
        <p><b>Materials Used for preparation</b> : {{$det->materials}}</p>
        @endif
        @if($det->when_exam)
        <p><b>When should you take up the examination</b> : {{$det->when_exam}}</p>
        @endif
        @if($det->score)
        <p><b>Score/Rank/Percentile</b> : {{$det->score}}</p>
        @endif
        @if($det->suggestions)
        <p><b>Suggestions</b> : {{$det->suggestions}}</p>
        @endif
        @if($det->tricks)
        <p><b>Tricks</b> : {{$det->tricks}}</p>
        @endif
        @if($det->start_prep)
        <p><b>When did I start my preparation</b> : {{$det->start_prep}}</p>
        @endif
        @if($det->concentrate)
        <p><b>Sections you should concentrate on</b> : {{$det->concentrate}}</p>
        @endif
        @if($det->hours)
        <p><b>How many hours per week you should spend for preparation</b> : {{$det->hours}}</p>
        @endif
        @if($det->rating)
        <p><b>Overall rating of the examination</b> : {{$det->rating}}</p>
        @endif
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

@endforeach
{!! $details->render() !!}					




</div>
</div>



@stop

