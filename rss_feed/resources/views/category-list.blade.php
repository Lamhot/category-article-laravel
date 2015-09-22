@extends('global-layout')

@section('body')
   <div class="row">
      @if(count($category) > 0)
         <div class="col-md-12 text-center" >
            <a href="{{ url('/category/create') }}" class="btn btn-primary" role="button">
               Add New Category
            </a>
            <hr />
            @include('error-notification')
         </div>
      @endif
      @forelse($category as $cat)
         <div class="col-md-3">
            <div class="thumbnail">
             
               <div class="caption">
                  <h4>{{$cat->id}}</h4>
                   <h4>{{$cat->name}}</h4>
                  <p>
                     <div class="row text-center" style="padding-left:1em;">
                     <a href="{{ url('/category/'.$cat->id.'/edit') }}" class="btn btn-warning pull-left">Edit</a>
                     <span class="pull-left">&nbsp;</span>
                     {!! Form::open(['url'=>'/category/'.$cat->id, 'class'=>'pull-left']) !!}
                        {!! Form::hidden('_method', 'DELETE') !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger', 'onclick'=>'return confirm(\'Are you sure?\')']) !!}
                     {!! Form::close() !!}
                     </div>
                  </p>
               </div>
            </div>
         </div>
      @empty
         <p>No category yet, <a href="{{ url('/create') }}">add a new one</a>?</p>
      @endforelse
   </div>
   <div align="center">{!! $category->render() !!}</div>
@stop
