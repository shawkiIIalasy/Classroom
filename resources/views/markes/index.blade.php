
   @extends('layouts.app')

@section('content')
    <h1>markes</h1>
@if(!Auth::guest())
  @if(Auth::user()->sign == 't')               
                 
  <div class="container" style="margin-left:-200px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">My Student</div>

                <div class="panel-body">
  
                    <a href="/markes/create" class="btn btn-primary">Add Markes</a>

               

                   @if(count($markes) > 0)
                  <table class="table">
                      <tr>
                        <th>Name</th>
                        <th>First</th>
                        <th>Second</th>
                        <th>Third</th>
                        <th>Final</th>
                        <th>Total</th>
                         <th>Edit</th>
                         <th>Delete</th>
                      </tr>
                        @if(isset(Auth::user()->markes->user_id ) )
                         @foreach($markes as $markes)
                              @if(Auth::user()->id == $markes->user_id  )
                                  <tr>
                                <td>{{$markes->name}}</td>
                               <td>{{$markes->first}}</td>
                                <td>{{$markes->second}}</td>
                               <td>{{$markes->third}}</td>
                               <td>{{$markes->final}}</td>
                               <td>{{($markes->final)+($markes->first)+($markes->second)+($markes->third)}}</td>  <td><a href="/markes/{{$markes->id}}/edit" class="btn btn-default pull-left">Edit</a></td>
<td>{!!Form::open(['action' => ['MarkesController@destroy', $markes->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}</td>

                              </tr> 
                              
                               @endif
                              

                            @endforeach
                              @endif
                        </table>
                    @else
                        <p>You have no Markes</p>
                          
                      @endif
  @else

                
  <div class="container" style="margin-left:-200px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">My Markes</div>

                <div class="panel-body">
  

               

                   @if(count($markes) > 0)
                  <table class="table">
                      <tr>
                        <th>Teacher Name</th>
                        <th>First</th>
                        <th>Second</th>
                        <th>Third</th>
                        <th>Final</th>
                        <th>Total</th>
                      </tr>
                         @foreach($markes as $markes)
                              @if(Auth::user()->name == $markes->name  )
                                  <tr>
                                <td>{{Auth::user()->sign}}</td>
                               <td>{{$markes->first}}</td>
                                <td>{{$markes->second}}</td>
                               <td>{{$markes->third}}</td>
                               <td>{{$markes->final}}</td>
                               <td>{{($markes->final)+($markes->first)+($markes->second)+($markes->third)}}</td>  
                              </tr> 
                              
                               @endif
                              

                            @endforeach

                        </table>
                    @else
                        <p>You have no Markes</p>
                          
                      @endif




  @endif
@endif


@endsection
