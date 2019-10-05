
@extends('layouts.app')
@section('css')
 <link href="{{asset('css/skills.css')}}" rel="stylesheet">

@endsection
@section('content')
<br>
<a href="/myprofile" class="btn btn-default">Go Back</a>

<h3>Skills</h3>
<hr class="btn-primary">
@foreach(Auth()->user()->skills as $skill)
  <div class="panel panel-default">
  <div class="panel-body">{{$skill->skill}}</div>
</div>


<div class="progress">
  <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40"
  aria-valuemin="0" aria-valuemax="100" style="width:{{$skill->range}}%">
    {{$skill->range}}% 
  </div>
</div>


@endforeach
<div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading" >
      <h4 class="panel-title" ">
        <a data-toggle="collapse" href="#collapse1" class="btn btn-primary glyphicon glyphicon-plus"></a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
      
 <form method="POST" action="">
  {{csrf_field()}}
 <div class="row">
<div class="col-sm-3">
<input type="text" name="skill" style="width: 200px" class="form-control"></div>
<div class="col-sm-3">
<div class="slidecontainer">
<input type="range" name='range' min="1" max="100" value="50" class="slider" id="myRange">
</div></div>
<div class="col-sm-3" id="demo" style="float:left;  margin:5px -75px 0 -135px;"></div>
<div class="col-sm-3"><BUTTON type="submit" style="margin-left:-65px; " name="submit" class="btn btn-primary glyphicon glyphicon-plus"></BUTTON></div>


</div>
</form>

    </div>
  </div>
</div>
@endsection
@section('script')
<script type="text/javascript"> 
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value; // Display the default slider value
slider.oninput = function() {
    output.innerHTML = this.value;
}</script>

@endsection