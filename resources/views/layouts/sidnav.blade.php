<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>ClassRoom</title>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  
     <link href="{{ asset('css/sidbar.css') }}" rel="stylesheet">

  
</head>

<body>



<nav class="navbar navbar-default sidebar navbar-fixed-top " role="navigation" style="margin-top: 50px;">
    <div class="container-fluid" >
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1" >
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>      
    </div>
    <div class="collapse navbar-collapse " id="bs-sidebar-navbar-collapse-1" >
      <ul class="nav navbar-nav" style="width:200px;">
        <li class="active"><a href="/posts" style="width:200px;">News Feeds<span style="font-size:16px;" class="pull-left hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
       
        <li ><a href="/dashboard" style="width:200px;">My post<span style="font-size:16px;" class="pull-left hidden-xs showopacity glyphicon glyphicon-list-alt"></span></a></li>  
        <li ><a href="/myprofile" style="width:200px;">My Profile<span style="font-size:16px;" class="pull-left hidden-xs showopacity glyphicon glyphicon-user"></span></a></li> 
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="width:200px;">My Class <span class="caret"></span><span style="font-size:16px;" class="pull-left hidden-xs showopacity glyphicon glyphicon-th-list"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="events" style="margin: 0px;">@if(Auth::user()->sign == 't')Event @else My Event @endif</a></li>
            <li><a href="/markes">@if(Auth::user()->sign == 't')Student Markes @else My Markes @endif</a></li>
            <li><a href="#">Exam date</a></li>
            <li><a href="/courses">Courses</a></li>
            
          </ul>
        </li>                 
        <li ><a href="/live" style="width:200px;">Live Class<span style="font-size:16px;" class="pull-left hidden-xs showopacity glyphicon glyphicon-blackboard"></span></a></li>
        <li style="margin-top: 200px;"><a href="#" style="width:200px;">Settings<span style="font-size:16px;" class="pull-left hidden-xs showopacity glyphicon glyphicon-cog"></span></a></li>

         <li ><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="width:200px;">logout<span style="font-size:16px;" class="pull-left hidden-xs showopacity glyphicon glyphicon-log-out"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
 
</div>

 
</body>
</html>
