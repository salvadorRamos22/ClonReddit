@extends('layouts.app')

@section('content')
<hr>

@foreach($posts as $post)
<div class="row">
     <div class="col-md-12">
          <h2><a href="{{route('post_path',['post'=>$post->id])}}">{{$post->title}}</a></h2>
          <small class="pull-right">
               <a href="{{route('edit_post_path',['post'=>$post->id])}}" class="btn btn-info">Editar</a>
               <form action="{{route('eliminar_post_path',['post'=>$post->id])}}" method="POST">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button type="submit" class="btn btn-danger">Eliminar</button>
               </form>
               
               
          </small>
          <p>Posteado {{$post->created_at->diffForHumans()}}</p>
          

     </div>
</div>

<hr>
@endforeach
{{$posts->render() }}
@endsection
