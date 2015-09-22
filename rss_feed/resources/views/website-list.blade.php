@extends('global-layout')
@section('body')
   <div class="row">
      @if(count($website) > 0)
         <div class="col-md-12 text-center" >
            <a href="{{ url('/website/create') }}" class="btn btn-primary" role="button">
               Add New Website
            </a>
            <hr />
            @include('error-notification')
         </div>
      @endif
      @forelse($website as $web)
         <div class="col-md-3">
            <div class="thumbnail">
             
               <div class="caption">
                  <h4>{{$web->id}}</h4>
                   <h4>{{$web->name}}</h4>
                    <h4>{{$web->url}}</h4>
                   <h4>{{$web->rss_url}}</h4>
                   <h4>{{$web->category_id}}</h4>
                   
                  <p>
                     <div class="row text-center" style="padding-left:1em;">
                     <a href="{{ url('/website/'.$web->id.'/edit') }}" class="btn btn-warning pull-left">Edit</a>
                     <span class="pull-left">&nbsp;</span>
                     {!! Form::open(['url'=>'/website/'.$web->id, 'class'=>'pull-left']) !!}
                        {!! Form::hidden('_method', 'DELETE') !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger', 'onclick'=>'return confirm(\'Are you sure?\')']) !!}
                     {!! Form::close() !!}
                     </div>
                  </p>
               </div>
            </div>
         </div>
      @empty
         <p>No website yet, <a href="{{ url('/create') }}">add a new one</a>?</p>
      @endforelse
   </div>
   <div align="center">{!! $website->render() !!}</div>
@stop
