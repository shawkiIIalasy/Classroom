<link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
<nav>
    
    <a href="/posts" style="font-size: 20px;float: left;">ClassRoom</a>


    <div class="animation start-home"></div>
 <form class="navbar-form navbar-left" method="POST" action="/posts/search" >
            {{ csrf_token() }}{{ csrf_field() }}
            {{ method_field('POST') }}
                <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="Search">
                <div class="input-group-btn">
                  <button class="btn btn-default" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                  </button>
                </div>
              </div>
            </form>
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
               
                    <li class="dropdown" >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="width: 200px; padding: 5px;" >
                            @if(isset(Auth::user()->info->image))<img src="/storage/cover_image/{{Auth::user()->info->image}}" style="width:40px;height:40px;margin-right: 5px;" class="avatar img-circle" alt="avatar"> {{Auth::user()->name }}           
                        @elseif(Auth::user()->sign != 't')
                        <img src="{{asset('images/noimage1.png')}}" style="width:40px;height:40px;margin-right: 5px;" class="avatar img-circle" alt="avatar">{{Auth::user()->name }}  
                       @else
                        <img src="{{asset('images/noimage.png')}}" style="width:40px;height:40px;margin-right: 5px;" class="avatar img-circle" alt="avatar">{{Auth::user()->name }}  
                        @endif

                                
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/dashboard">MyPost</a></li>
                            <li><a href="/myprofile">MyProfile</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                   <li class="dropdown" style="float: right;">
                       
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >
                          <span class="badge">{{count(auth()->user()->unreadNotifications)}}</span><span class="glyphicon glyphicon-globe"></span> 
                        </a>

                        <ul class="dropdown-menu" style="width:300px;float: right" role="menu">
                            @if(count(auth()->user()->unreadNotifications) >0)
                            @foreach(auth()->user()->unreadNotifications as $note)
                            <li >
                                 <div class="col-md-3 col-sm-3 col-xs-3"><div class="notify-img"><img src="http://placehold.it/45x45" alt=""></div></div>
                                <small>{!! $note->data['data'] !!}</small>
                                <?php $note->markAsRead(); ?>
                            
                            </li>
                            <hr style="margin-top:30px;">
                            @endforeach
                            @else
                               <li>
                                 <div class="col-md-3 col-sm-3 col-xs-3"><div class="notify-img"><img src="http://placehold.it/45x45" alt=""></div></div>
                                <small>you don't have Notifications</small>
                               
                            </li>
                             <hr style="margin-top:30px;">
                            @endif

                        <div class="notify-drop-footer text-center" style="padding:0px;margin-top: -25px;">
                        <a href="" style="color: #000;"><i class="glyphicon glyphicon-eye-open"></i>See All</a>
                        </div>
                        </ul>
                           
                    </li>

                @endif
            </ul>
          
     </nav>
