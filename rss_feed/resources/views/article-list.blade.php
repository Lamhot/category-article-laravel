@extends('global-layout')
@section('body')
   <div class="row">
      @if(count($article) > 0)
         <div class="col-md-12 text-center" >
            <a href="{{ url('/article/create') }}" class="btn btn-primary" role="button">
               Add New Article
            </a>
            <hr />
            @include('error-notification')
         </div>
      @endif
      @forelse($article as $artl)
         <div class="col-md-3">
            <div class="thumbnail">
             
               <div class="caption">
                  <h6>{{$artl->id}}</h6>
                   <h6>{{$artl->title}}</h6>
                    <h6>{{$artl->url}}</h6>
                   <h6>{{$artl->thumnail_url}}</h6>
                   <h6>{{$artl->summary}}</h6>
                    <h6>{{$artl->content}}</h6>
                   <h6>{{$artl->publish_date}}</h6>
                   <h6>{{$artl->website_id}}</h6>
                   <h6>{{$artl->category_id }}</h6>
                   
                  <p>
                     <div class="row text-center" style="padding-left:1em;">
                     <a href="{{ url('/article/'.$artl->id.'/edit') }}" class="btn btn-warning pull-left">Edit</a>
                     <span class="pull-left">&nbsp;</span>
                     {!! Form::open(['url'=>'/article/'.$artl->id, 'class'=>'pull-left']) !!}
                        {!! Form::hidden('_method', 'DELETE') !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger', 'onclick'=>'return confirm(\'Are you sure?\')']) !!}
                     {!! Form::close() !!}
                     </div>
                  </p>
               </div>
            </div>
         </div>
      @empty
         <p>No article yet, <a href="{{ url('article/create') }}">add a new one</a>?</p>
      @endforelse
   </div>
   <div align="center">{!! $article->render() !!}</div>
@stop
