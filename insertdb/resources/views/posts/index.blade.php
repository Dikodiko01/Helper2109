@extends('layout-2.meta')

    @section('title-title') Notion @endsection

    @section('content')



    <div class="wells">

      <div class="wlap">
        <div>
          <h1>Vacancies & Hackathons</h1>
        </div>
        <div class="salam-div">
        <h3><a href="/posts/create" class="salam">Add Post</a></h3>
        </div>
      </div>

      @if (count($posts) > 1)
        @foreach($posts as $post)
          <div class="posts-in">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Written on {{$post -> created_at}}</small>
          </div>
          @endforeach
      @else


      @endif
    </div>


    <!--<h3>You blog posts</h3>
    @if (count($posts) > 0)
    <table class="tabel table-striped">
      <tr>
        <th>Title</th>
        <th></th>
      </tr>
       <tr>
         <th> {{ $post->title}}</th>
         <th> <a href="/posts/ {{$post->id }}/edit" class="brnt btn-default"></a> </th>
       </tr>

    </table>
  @else
    <p>You have not posts.</p>
  @endif
-->


    @endsection
