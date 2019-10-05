
@extends('layouts.app')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('css/avatar.css')}}">
@endsection
@section('content')
 @if(!Auth::guest())
     @if(Auth::user()->id  )  
       



<div class="col-lg-6 col-sm-6">
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="{{asset('images/450x230.gif')}}">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
           @if(isset($user->info->image))<img alt="" src="/storage/cover_image/{{$user->info->image}}">  @elseif(Auth::user()->sign =='t') <img alt="" src="{{asset('images/noimage.png')}}">@else  <img alt="" src="{{asset('images/noimage1.png')}}">@endif
            
        </div>
        <div class="card-info"> <span class="card-title" style="color:#fff;">@if(Auth::user()->sign=='t')Teacher :{{$user->name}}@else Student :{{$user->name}}@endif </span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="..." style="width:800px;">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" style="z-index: 0;" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                <div class="hidden-xs">Informtion</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">@if(Auth::user()->sign == 't') My Student @else My Teacher @endif </div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-education" aria-hidden="true"></span>
                <div class="hidden-xs">Skills && Education</div>
            </button>
        </div>
    </div>

        <div class="well" style="width:800px; ">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
          <div class="container">
      <div class="row" style="margin-left: -420px;">
      
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">@if(Auth::user()->sign == 't') Teacher @else Student @endif</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> 
                         </div>
                
               
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Name:</td>
                        <td>{{$user->name}}</td>
                      </tr>
                       <tr>
                        <td>Email</td>
                        <td><a href="mailto:info@support.com">{{$user->email}}</a></td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td>@if(isset($user->info->DateofBirth)) {{$user->info->DateofBirth}} @else NO HAvE @endif</td>
                      </tr>

                        <tr>
                        <td>Gender</td>
                        <td>@if(isset($user->info->Gender)) {{$user->info->Gender}} @else NO HAvE @endif</td>
                      </tr>
                        <tr>
                        <td>Home Address</td>
                        <td>@if(isset($user->info->Home_Address)) {{$user->info->Home_Address}} @else NO HAvE @endif</td>
                      </tr>
                     
                        <td>Phone Number</td>
                        <td>@if(isset($user->info->Phone_Number)) 0{{$user->info->Phone_Number}} @else NO HAvE @endif
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  <a href="/skills" class="btn btn-primary"><span class="glyphicon glyphicon-briefcase"> Skills</span></a>
                  <a href="/education" class="btn btn-primary" style="width:120px;"><span class="glyphicon glyphicon-education"> Education</span></a>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                             @if(isset($user->info->user_id)) <a href="/info/{{$user->info->id}}/edit" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a> @else <a href="/info/create" data-original-title="add this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class=" glyphicon glyphicon-plus"></i></a> @endif
                           
                        </span>
                    </div>
            
          </div>
        </div>
      </div>
    </div>
        </div>
<div class="tab-pane fade in" id="tab2">        
       @if(Auth::user()->sign=='t')
       @foreach($user->all() as $use)
        @if($use->sign == Auth::user()->name)
           <div class="containerb" style="float: left;width:232px;margin-right:20px;height:400px; ">
              <div class="avatar-flip">
                @if(isset($use->info->image))    <img src="/storage/cover_image/{{$use->info->image}}" height="150" width="150">
                @else  <img src="/storage/cover_image/noimage1.png" height="150" width="150">
                
                @endif
               @if(isset($use->info->image))    <img src="/storage/cover_image/{{$use->info->image}}" height="150" width="150">
                @else  <img src="/storage/cover_image/noimage1.png" height="150" width="150">
                @endif
              </div>

              <h2 style="margin-top: -40px;">{{$use->name}}</h2>
               @foreach($use->educations as $edu)
              @if($use->id == $edu->user_id)
              <h4>{{$edu->degree}}</h4>
              <h4>{{$edu->school}} <small>{{\Carbon\Carbon::parse($edu->FormYear)->format('F j, Y')}} - {{\Carbon\Carbon::parse($edu->ToYear)->format('F j, Y')}} </small></h4>
              @break
              @else
              <div class="alert alert-info" style="margin-top: 5px;">
                 There are no Education or not yet provided
                </div>
                @break
              @endif
              @endforeach
             <h4 class="pull-left">Skills</h4> <hr class="btn-primary" style="width:200px;margin: 0px;" ><div class="row"> @foreach($use->skills as $skil)
              @if($use->id == $skil->user_id)
              
                <div class="pull-left" style="padding-right:5px " > 
               <span class="badge badge-primary"> {{$skil->skill}}</span>
              </div>
              @else
              <div class="alert alert-info" style="margin-top: 5px;">
                 There are no skills or not yet provided
                </div>
                @break
              @endif
              @endforeach
              </div>
            </div>
            @endif
       @endforeach
       @else 


        @foreach($user->all() as $use)
        @if($use->name == Auth::user()->sign)
                <div class="containerb">
                <div class="avatar-flip"> 
                @if(isset($use->info->image))    <img src="/storage/cover_image/{{$use->info->image}}" height="150" width="150">
                 @elseif($use->sign=='t')  <img src="{{asset('images/noimage.png')}}" height="150" width="150">
                @else
                <img src="{{asset('images/noimage1.png')}}" height="150" width="150">
                @endif
               @if(isset($use->info->image))    <img src="/storage/cover_image/{{$use->info->image}}" height="150" width="150">
                 @elseif($use->sign=='t')  <img src="{{asset('images/noimage.png')}}" height="150" width="150">
                @else
                <img src="{{asset('images/noimage1.png')}}" height="150" width="150">
                @endif
              </div>
               <h2 style="margin-top: -40px;">{{$use->name}}</h2>
               @foreach($use->educations as $edu)
              @if($use->id == $edu->user_id)
              <h4>{{$edu->degree}}</h4>
              <h4>{{$edu->school}} <small>{{\Carbon\Carbon::parse($edu->FormYear)->format('F j, Y')}} - {{\Carbon\Carbon::parse($edu->ToYear)->format('F j, Y')}} </small></h4>
              @break
              @else
              <div class="alert alert-info" style="margin-top: 5px;">
                 There are no Education or not yet provided
                </div>
                @break
              @endif
              @endforeach
             <h4 class="pull-left">Skills</h4>
             <br>
             <hr class="btn-primary" style="width:200px;margin: 0px;" ><div class="row">
              @foreach($use->skills as $skil)
              @if($use->id == $skil->user_id)
              
                <div class="pull-left" style="padding-right:5px " > 
               <span class="badge badge-primary"> {{$skil->skill}}</span>
              </div>
              @else
              <div class="alert alert-info" style="margin-top: 5px;">
                 There are no skills or not yet provided
                </div>
                @break
              @endif
              @endforeach
              </div>
            </div>
            @endif
       @endforeach
@endif
      
        </div>
        <div class="tab-pane fade in" id="tab3">
          <h3>This is tab 3</h3>
        </div>
      </div>
    </div>
    
    </div>
            
<script type="text/javascript">$(document).ready(function() {
$(".btn-pref .btn").click(function () {
    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    // $(".tab").addClass("active"); // instead of this do the below 
    $(this).removeClass("btn-default").addClass("btn-primary");   
});
});</script>    
      @endif  
@endif
@endsection
