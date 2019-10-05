
@extends('layouts.app')

@section('content')
<style type="text/css">


</style>
<br>
<a href="/myprofile" class="btn btn-default">Go Back</a>
<h3>Education</h3>
<button type="button" class="btn btn-primary glyphicon glyphicon-plus pull-right" style="margin-top: -30px;" data-toggle="modal" data-target="#myModal"></button>
<hr class="btn-primary">
<!-- Button to Open the Modal -->
<!-- The Modal -->
<div class="modal fade" id="myModal" >
  <div class="modal-dialog" style="width:900px;">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Education</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" >
      <form class="form-horizontal" role="form" method="POST" action="" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-1 control-label">School</label>

                            <div class="col-md-12">
                                <input id="school" type="text" class="form-control" name="school"   required autofocus >
                            </div>
                        </div>

                       <div class="form-group">
                            <label for="name" class="col-md-1 control-label">Degree</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="degree"  placeholder="Ex:Bachelor's" value="" required autofocus >
                            </div>
                        </div><div class="form-group">
                            <label for="name" class="col-md-0 control-label" style="margin-left: 20px;">Field of study</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="Fieldofstudy"  placeholder="Ex:Computer Since" value="" required autofocus >
                            </div>
                        </div><div class="form-group">
                            <label for="name" class="col-md-1 control-label">Grade</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="grade"   value="" required autofocus >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class=" control-label" style="margin-left: 20px;">Activities and societies</label>

                            <div class="col-md-12">
                                <textarea id="name"  class="form-control" name="Activitiesandsocieties"   value=""  autofocus ></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-6 control-label">From Year</label>
                            <label for="name" class="col-md-0 control-label">To Year</label>

                            <div class="col-md-12">
                                <input id="name" type="date" max=""  min="" class="form-control pull-left" name="FromYear"  style="width:49%" value="" required autofocus >
                                 <input id="name" type="date" max=""  min="" class="form-control pull-right" style="width:49%;" name="ToYear"   value="" required autofocus >
                            </div>
                        </div><div class="form-group">
                            <label for="name" class="col-md-1 control-label">Description</label>

                            <div class="col-md-12">
                                <textarea id="name"  class="form-control" name="Description"   value=""  autofocus ></textarea>
                            </div>
                        </div><div class="form-group">
                            <label for="name" class="col-md-1 control-label">Media</label>

                            <div class="col-md-12">
                                <input id="name" type="file" class="form-control" name="Media"   value=""  autofocus >
                            </div>
                        </div>
                        <div class="alert alert-info alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                We no longer share changes to education with your network.<a href="#" class="alert-link">read this message</a>.
                        </div>
     
                        <div class="form-group">
                           <div class="modal-footer">
                                <button type="submit" class="btn btn-primary glyphicon glyphicon-plus"></button>
                            </div>
                        </div>
                        
      
      
                    </form>
      </div>

      <!-- Modal footer -->
      

    </div>
  </div>
</div>
@foreach(Auth()->user()->educations as $education)
<div class="panel panel-default">
  <div class="panel-body">
    <img src="{{asset('images/logo/school.png')}}" width="100px;" height="130px" style="float:left;margin-right: 5PX;">

    <button type="button" class="btn btn-primary glyphicon glyphicon-pencil pull-right"  data-toggle="modal" data-target="#myModal1"></button>

<!-- Button to Open the Modal -->
<!-- The Modal -->
<div class="modal fade" id="myModal1" >
  <div class="modal-dialog" style="width:900px;">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Education</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" >
      <form class="form-horizontal" role="form" method="POST" action="/education/{{$education->id}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{method_field('PUT')}}

                        <div class="form-group">
                            <label for="name" class="col-md-1 control-label">School</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="school"   value="{{$education->school}}"  required autofocus >
                            </div>
                        </div>

                       <div class="form-group">
                            <label for="name" class="col-md-1 control-label">Degree</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="degree"  placeholder="Ex:Bachelor's" value="{{$education->degree}}" required autofocus >
                            </div>
                        </div><div class="form-group">
                            <label for="name" class="col-md-0 control-label" style="margin-left: 20px;">Field of study</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="Fieldofstudy"  placeholder="Ex:Computer Since" value="{{$education->Fieldofstudy}}" required autofocus >
                            </div>
                        </div><div class="form-group">
                            <label for="name" class="col-md-1 control-label">Grade</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="grade"   value="{{$education->grade}}" required autofocus >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class=" control-label" style="margin-left: 20px;">Activities and societies</label>

                            <div class="col-md-12">
                                <textarea id="name"  class="form-control" name="Activitiesandsocieties"   value="{{$education->Activitiesandsocieties}}"  autofocus ></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-6 control-label">From Year</label>
                            <label for="name" class="col-md-0 control-label">To Year</label>

                            <div class="col-md-12">
                                <input id="name" type="date" max=""  min="" class="form-control pull-left" name="FromYear"  style="width:49%" value="{{$education->FromYear}}" required autofocus >
                                 <input id="name" type="date" max=""  min="" class="form-control pull-right" style="width:49%;" name="ToYear"   value="{{$education->ToYear}}" required autofocus >
                            </div>
                        </div><div class="form-group">
                            <label for="name" class="col-md-1 control-label">Description</label>

                            <div class="col-md-12">
                                <textarea id="name"  class="form-control" name="Description"   value=""  autofocus ></textarea>
                            </div>
                        </div><div class="form-group">
                            <label for="name" class="col-md-1 control-label">Media</label>

                            <div class="col-md-12">
                                <input id="name" type="file" class="form-control" name="Media"   value=""  autofocus >
                            </div>
                        </div>
                        <div class="alert alert-info alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                We no longer share changes to education with your network.<a href="#" class="alert-link">read this message</a>.
                        </div>
     
                        <div class="form-group">
                           <div class="modal-footer">
                                <button type="submit" class="btn btn-primary glyphicon glyphicon-pencil"></button>
                            </div>
                        </div>
                        
      
      
                    </form>
      </div>

      <!-- Modal footer -->
      

    </div>
  </div>
</div>



    <h1 >{{$education->school}}</h1>
    <h5 >{{$education->degree}} Degree || {{$education->Fieldofstudy}}</h5>
    <h6 >{{\Carbon\Carbon::parse($education->FormYear)->format('F j, Y')}} - {{\Carbon\Carbon::parse($education->ToYear)->format('F j, Y')}} </h6>
 <form method="post" action="/education/{{$education->id}}">
  {{csrf_field()}} {{method_field('delete')}}
<button type="submit" class="btn btn-primary glyphicon glyphicon-remove pull-right" style="margin-top: -60px;"></button></form>  
@if($education->Description && $education->Activitiesandsocieties)<button data-toggle="collapse" class="btn btn-primary glyphicon glyphicon-menu-hamburger pull-right" data-target="#{{$education->id}}"></button>
<div id="{{$education->id}}" class="collapse">
  {{$education->Activitiesandsocieties}}<hr>
{{$education->Description}}
</div>
@endif

  </div>
</div>
@endforeach
@endsection