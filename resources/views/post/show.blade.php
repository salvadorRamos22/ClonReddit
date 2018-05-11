@extends('layouts.base')

@section('content')


<hr>
<div class="row">
     <div class="col-md-12">
          <h2>{{$post->title}}</h2>
          <p>{{$post->descripcion}}</p>
          <a href="{{$post->url}}">{{$post->url}}</a>
     </div>
</div>
<hr>


@endsection