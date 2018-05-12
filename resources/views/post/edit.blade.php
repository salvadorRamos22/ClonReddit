@extends('layouts.base')

@section('content')
@if(count($errors)>0)
<div class="alert alert-danger">
     <ul>
          @foreach($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
     </ul>
</div>
@endif

<form action="{{route('update_post_path',['post'=>$post->id])}}" method="POST">
     {{csrf_field()}}
     {{method_field('PUT')}}
     <div class="form-group">
          <label for="title">Titulo:</label>
          <input type="text" name="title" class="form-control" value="{{$post->title}}"/>
     </div>

     <div class="form-group">
          <textarea name="descripcion"  cols="60" rows="5" placeholder="Descripcion...">{{$post->descripcion}}</textarea>
     </div>

     <div class="form-group">
          <labe for='url'>Url:</labe>
          <input type="text" name="url" class="form-control" value="{{$post->url}}">
     </div>

     <div class="form-group">
          <button type="submit" class="btn btn-primary">Editar Post</button>

     </div>
     
     
</form>

@endsection