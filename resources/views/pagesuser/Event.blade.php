
@extends('layouts.app')
 
@section('content')
@if(!Auth::guest())
@if(Auth::user()->sign=='t')
        <div class="container" style="width:800px;z-index: 0; margin-top: 50px;height:800px">
 
            <div class="panel panel-primary">
 
             <div class="panel-heading">Event </div>
 
              <div class="panel-body">    
 
                   {!! Form::open(array('route' => 'events.add','method'=>'POST','files'=>'true')) !!}
                    <div class="row">
                       <div class="col-xs-12 col-sm-12 col-md-12">
                          @if (Session::has('success'))
                             <div class="alert alert-success">{{ Session::get('success') }}</div>
                          @elseif (Session::has('warnning'))
                              <div class="alert alert-danger">{{ Session::get('warnning') }}</div>
                          @endif
 
                      </div>
 
                      <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            {!! Form::label('event_name','Event Name:') !!}
                            <div class="">
                            {!! Form::text('event_name', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('event_name', '<p class="alert alert-danger">:message</p>') !!}
                            </div>
                        </div>
                      </div>
 
                      <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                          {!! Form::label('start_date','Start Date:') !!}
                          <div class="">
                          {!! Form::date('start_date', null, ['class' => 'form-control']) !!}
                          {!! $errors->first('start_date', '<p class="alert alert-danger">:message</p>') !!}
                          </div>
                        </div>
                      </div>
 
                      <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                          {!! Form::label('end_date','End Date:') !!}
                          <div class="">
                          {!! Form::date('end_date', null, ['class' => 'form-control']) !!}
                          {!! $errors->first('end_date', '<p class="alert alert-danger">:message</p>') !!}
                          </div>
                        </div>
                      </div>
 
                      <div class="col-xs-1 col-sm-1 col-md-1 text-center"> &nbsp;<br/>
                      {!! Form::submit('Add Event',['class'=>'btn btn-primary']) !!}
                      </div>
                    </div>
                   {!! Form::close() !!}
 
             </div>
 
            </div>
 
            <div class="panel panel-primary">
              <div class="panel-heading">MY Event Details</div>
              <div class="panel-body" >
                  {!! $calendar_details->calendar() !!}
              </div>
            </div>
 
            </div>
@else
  <div class="panel panel-primary" style="margin-top: 50px;">
              <div class="panel-heading" style="z-index: 0;">MY Event Details</div>
              <div class="panel-body" style="z-index: 0;" >
                  {!! $calendar_details->calendar() !!}
              </div>
            </div>            
@endif
@endif
@endsection
@section('script')
<script src="http://code.jquery.com/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
{!! $calendar_details->script() !!}
@endsection