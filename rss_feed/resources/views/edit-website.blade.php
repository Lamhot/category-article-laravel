@extends('global-layout')
@section('body')
   @include('error-notification')
   {!! Form::model($website,['url' => '/website/'.$website->id, 'method' => 'PUT', 'files'=>true]) !!}
      <div class="form-group">
         <label for="name">Name</label>
          {!! Form::text('name',null,['class'=>'form-control']) !!}
      </div>
   <div class="form-group">
         <label for="url">URL</label>
         {!! Form::text('url',null,['class'=>'form-control']) !!}
      </div>

      <div class="form-group">
         <label for="rss_url">RSS URL</label>
          {!! Form::text('rss_url',null,['class'=>'form-control']) !!}
      </div>
    <div class="form-group">
         <label for="category_id">Category ID</label>
          {!! Form::text('category_id',null,['class'=>'form-control']) !!}
      </div>
    
      <button type="submit" class="btn btn-primary">Update</button>
      <a href="{{ url('/website') }}" class="btn btn-warning">Cancel</a>

   {!! Form::close() !!}
@stop