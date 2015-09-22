@extends('global-layout')

@section('body')
   @include('error-notification')
   {!! Form::model($category,['url' => '/category/'.$category->id, 'method' => 'PUT', 'files'=>true]) !!}
      <div class="form-group">
         <label for="Name">Name</label>
          {!! Form::text('name',null,['class'=>'form-control']) !!}
      </div>

      <button type="submit" class="btn btn-primary">Save</button>
      <a href="{{ url('/category') }}" class="btn btn-warning">Cancel</a>

   {!! Form::close() !!}
@stop
