@extends('layouts.base')

@section('content')
<hr>

@foreach($posts as $post)
<div class="row">
     <div class="col-md-12">
          <h2><a href="{{route('post_path',['post'=>$post->id])}}">{{$post->title}}</a></h2>
          <small class="pull-right">
               <a href="{{route('edit_post_path',['post'=>$post->id])}}" class="btn btn-info">Editar</a>
          </small>
          <p>Posteado {{$post->created_at->diffForHumans()}}</p>
          

     </div>
</div>

<hr>
@endforeach
{{$posts->render() }}
@endsection
