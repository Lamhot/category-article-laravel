@extends('global-layout')
@section('body')
   @include('error-notification')
   {!! Form::open(['url'=>'/article', 'method'=>'POST', 'files'=>'true']) !!}
      <div class="form-group">
         <label for="name">Title</label>
        <input type="text" class="form-control" name="title" value="">
      </div>
    <div class="form-group">
         <label for="url">URL</label>
         <input type="text" class="form-control" name="url" value="">
      </div>
      <div class="form-group">
         <label for="thumnail_url">Thumnail URL</label>
        <input type="text" class="form-control" name="thumnail_url" value="">
      </div>
     <div class="form-group">
         <label for="summary">Summary</label>
         <input type="text" class="form-control" name="summary" value="">
      </div>
      <div class="form-group">
         <label for="content">Content</label>
        <input type="text" class="form-control" name="content" value="">
      </div>
    <div class="form-group">
         <label for="publish_date">Publish Date</label>
         <input type="text" class="form-control" name="publish_date" value="">
        
      </div>
        <div class="form-group">
    {!! Form::label('Category') !!}<br />
    {!! Form::select('category_id', 
        (['0' => 'Select a Category'] + $category), 
            null, 
            ['class' => 'form-control']) !!}
</div>
      <div class="form-group">
    {!! Form::label('Website') !!}<br />
    {!! Form::select('website_id', 
        (['0' => 'Select a Website'] + $website), 
            null, 
            ['class' => 'form-control']) !!}
</div>  
      <button type="submit" class="btn btn-primary">Simpan</button>
      <a href="{{ url('/article') }}" class="btn btn-warning">Cancel</a>
   {!! Form::close() !!}
@stop
