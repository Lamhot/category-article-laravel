@extends('global-layout')
@section('body')
   @include('error-notification')
   {!! Form::open(['url'=>'/category', 'method'=>'POST', 'files'=>'true']) !!}
   
      <div class="form-group">
         <label for="name">Name</label>
        <input type="text" class="form-control" name="name" value="">
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
      <a href="{{ url('/category') }}" class="btn btn-warning">Cancel</a>
   {!! Form::close() !!}
@stop
