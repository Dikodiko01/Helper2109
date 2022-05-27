
@if (count($errors) > 0)
  @foreach($errors->all() as $error)
    <div class="alert">
      {{ $error}}
      <h3>You have error</h3>
    </div>
  @endforeach
@endif

@if(session('success'))
  <div class="success">
    {{session('success')}}
  </div>
@endif

@if(session('error'))
  <div class="danger">
    {{session('error')}}

  </div>
@endif
