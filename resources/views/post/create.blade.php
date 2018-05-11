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

     <form action="{{route('store_post_path')}}" method="POST">
          {{csrf_field()}}
          <div class="form-group">
               <label for="title">Titulo:</label>
               <input type="text" name="title" class="form-control" value="{{old('title')}}"/>
          </div>

          <div class="form-group">
               <textarea name="descripcion"  cols="60" rows="5" placeholder="Descripcion...">{{old('descripcion')}}</textarea>
          </div>

          <div class="form-group">
               <labe for='url'>Url:</labe>
               <input type="text" name="url" class="form-control" value="{{old('url')}}">
          </div>

          <div class="form-group">
               <button type="submit" class="btn btn-primary">Crear Post</button>

          </div>
          
          
          

     </form>


@endsection