@extends('global-layout')
@section('body')
   @include('error-notification')
   {!! Form::model($article,['url' => '/article/'.$article->id, 'method' => 'PUT', 'files'=>true]) !!}
      <div class="form-group">
         <label for="title">Title</label>
          {!! Form::text('title',null,['class'=>'form-control']) !!}
      </div>
   <div class="form-group">
         <label for="url">URL</label>
         {!! Form::text('url',null,['class'=>'form-control']) !!}
      </div>

      <div class="form-group">
         <label for="thumnail_url">Thumnail URL</label>
          {!! Form::text('thumnail_url',null,['class'=>'form-control']) !!}
      </div>
    <div class="form-group">
         <label for="category_id">Category ID</label>
          {!! Form::text('category_id',null,['class'=>'form-control']) !!}
      </div>
    <div class="form-group">
         <label for="summary">Summary</label>
         {!! Form::text('summary',null,['class'=>'form-control']) !!}
      </div>

      <div class="form-group">
         <label for="content">Content</label>
          {!! Form::text('content',null,['class'=>'form-control']) !!}
      </div>
    <div class="form-group">
         <label for="publish_date">Publish Date</label>
          {!! Form::text('publish_date',null,['class'=>'form-control']) !!}
      </div>
   
   <div class="form-group">
         <label for="website_id">Website ID</label>
          {!! Form::text('website_id',null,['class'=>'form-control']) !!}
      </div>
    
      <button type="submit" class="btn btn-primary">Update</button>
      <a href="{{ url('/article') }}" class="btn btn-warning">Cancel</a>

   {!! Form::close() !!}
@stop