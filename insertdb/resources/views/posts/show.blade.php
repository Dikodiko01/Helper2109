@extends('layout-2.meta')

@section('title-title') Show @endsection

@section('content')
  <div class="posts-333">

    <a href="/posts" class="back-1"><button type="button" name="button">Go Back</button></a>
    <h1>{{ $post -> title}}</h1>
    <p>{{ $post -> body}}</p>
    <hr>
    <small>Written on {{ $post -> created_at }}</small>
    <hr>
    <button type="button" class="wtf"><a href="/posts/{{$post->id}}/edit ">Edit</a></button>


    {{!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-rigth'])!!}}

    {{ Form::hidden('_method', 'DELETE') }}

    {{!! Form::submit('Delete', ['class' => 'xaff']) !!}}

    {{!! Form::close()!!}}

  </div>
@endsection
