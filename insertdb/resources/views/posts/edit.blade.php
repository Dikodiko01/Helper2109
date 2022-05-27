@extends('layout-2.meta')

    @section('title-title') Create @endsection

    @section('content')

    <div class="wells">
      <h1>Edit Post</h1>

      @include('inc.messages')
      {!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'POST']) !!}
          <div class="form-group">
              {{ Form::label('title', 'Title')}}
              {{ Form::text('title', $post->title, ['classes' => 'form-control', 'placeholder' => 'Title'])}}
          </div>

          <div class="form-group">
              {{ Form::label('body', 'Body')}}
              {{ Form::textarea('body', $post->body, ['classes' => 'form-control', 'placeholder' => 'Body'])}}
          </div>
          {{ Form::hidden('_method', 'PUT')}}

          {{ Form::submit('Submit', ['class' => 'button'])}}

      {!! Form::close() !!}




    @endsection
