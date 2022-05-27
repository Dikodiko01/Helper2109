@extends('layout-2.meta')

    @section('title-title') Create @endsection

    @section('content')

    <div class="wells">
      <a href="/posts" class="back-1"><button type="button" name="button">Go Back</button></a>
      <h1>Create Post</h1>

      @include('inc.messages')
      {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST']) !!}
          <div class="form-group">
              {{ Form::label('title', 'Title')}}
              {{ Form::text('title', '', ['classes' => 'form-control', 'placeholder' => 'Title'])}}
          </div>

          <div class="form-group">
              {{ Form::label('body', 'Body')}}
              {{ Form::textarea('body', '', ['classes' => 'form-control', 'placeholder' => 'Body'])}}
          </div>
          {{ Form::submit('Submit', ['class' => 'button-345'])}}

      {!! Form::close() !!}




    @endsection
