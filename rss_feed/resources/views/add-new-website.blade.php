@extends('global-layout')
@section('body')
   @include('error-notification')
   {!! Form::open(['url'=>'/website', 'method'=>'POST', 'files'=>'true']) !!}
      
      <div class="form-group">
         <label for="name">Name</label>
        <input type="text" class="form-control" name="name" value="">
      </div>
    <div class="form-group">
         <label for="url">URL</label>
         <input type="text" class="form-control" name="url" value="">
      </div>
      <div class="form-group">
         <label for="rss_url">RSS URL</label>
        <input type="text" class="form-control" name="rss_url" value="">
      </div>
   <div class="form-group">
    {!! Form::label('Category') !!}<br />
    {!! Form::select('category_id', 
        (['0' => 'Select a Category'] + $category), 
            null, 
            ['class' => 'form-control']) !!}
</div>
   
      <button type="submit" class="btn btn-primary">Simpan</button>
      <a href="{{ url('/website') }}" class="btn btn-warning">Cancel</a>
   {!! Form::close() !!}
@stop
