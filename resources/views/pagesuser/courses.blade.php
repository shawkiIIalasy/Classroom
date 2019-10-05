
@extends('layouts.app')
@section('css')
 <link href="{{asset('css/skills.css')}}" rel="stylesheet">

@endsection
@section('content')
<br>
<a href="/posts" class="btn btn-default">Go Back</a>

<h3>Courses</h3>
<hr class="btn-primary">
@foreach($user->all() as $use)
@foreach($courses as $cours)

@if(Auth::user()->id == $cours->user_id || $use->name == Auth::user()->sign)

  <div class="panel panel-default">
  <div class="panel-body">{{$cours->course}}</div>
   <div class="panel-body">{{$cours->file}}
  <a href="/storge/file/{{$cours->file}}">

@if(strpos($cours->file, ".pdf"))
<img src="{{asset('images/logo/pdf.png')}}" width="50px" height="50px">
@elseif(strpos($cours->file, ".doc"))
<img src="{{asset('images/logo/word.png')}}" width="50px" height="50px">
@elseif(strpos($cours->file, ".zip")||strpos($cours->file, ".rar"))
<img src="{{asset('images/logo/zip.png')}}" width="50px" height="50px">
@elseif(strpos($cours->file, ".ppt")||strpos($cours->file, ".pps"))
<img src="{{asset('images/logo/powerpoint.png')}}" width="50px" height="50px">
@elseif(strpos($cours->file, ".xls"))
<img src="{{asset('images/logo/Excel.png')}}" width="50px" height="50px">
@endif
  </a>

   </div>

</div>

@endif




@endforeach
@break
@endforeach
@if(Auth::user()->sign =='t')
<div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading" >
      <h4 class="panel-title" ">
        <a data-toggle="collapse" href="#collapse1" class="btn btn-primary glyphicon glyphicon-plus"></a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
      
 <form method="POST" action="" enctype="multipart/form-data">
  {{csrf_field()}}
 <div class="row">
<div class="col-sm-3">
<input type="text" name="course" style="width: 200px" class="form-control"></div>
<div class="col-sm-3">
<input type="file" name='file' style="width:200px;margin-left: 20px;margin-right: 50px;" class="form-control" >
</div>

<BUTTON type="submit" style="" name="submit" class="btn btn-primary glyphicon glyphicon-plus" ></BUTTON>


</div>
</form>

    </div>
  </div>
</div>@endif
@endsection

