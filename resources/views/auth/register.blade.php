@extends('layouts.home')

@section('content')
<br>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" pattern="[a-z]{5,12}"  value="{{ old('name') }}" required autofocus ><span class="validity"></span> 


                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email"  value="{{ old('email') }}" required ><span class="validity"></span> 

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('sign') ? ' has-error' : '' }}">
                            <label for="sign" class="col-md-4 control-label">Sign Up As</label>

                            <div class="col-md-6">
   
                                                            <script type="text/javascript">
                              function showfield(name){
                                if(name=='s' || name=='p')document.getElementById('div1').style.display="block";
                                else document.getElementById('div1').style.display="none";
                              }
                             
                             function hidefield() {
                             document.getElementById('div1').style.display='none';
                             }
                              </script>
                             
                              <body onload="hidefield()">
                             
                              <select name="travel_arriveVia" class="form-control" id="travel_arriveVia" onchange="showfield(this.options[this.selectedIndex].value)">
                              <option value="t" selected>Teacher</option>
                              <option value="s">Student</option>
                              <option value="p">Parent</option>
                             
                              </select>
                              <div id="div1">Teacher Name: <input type="text" class="form-control" name="sign" value="t" /></div>
                             
                             
                                                            @if ($errors->has('sign'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('sign') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required><span class="validity"></span> 

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required><span class="validity"></span> 
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
