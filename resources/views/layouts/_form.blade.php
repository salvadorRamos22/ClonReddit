@if($post->exists)
<form action="{{route('update_post_path',['post'=>$post->id])}}" method="POST">
     {{method_field('PUT')}}
@else
<form action="{{route('store_post_path')}}" method="POST">
     
@endif

     {{csrf_field()}}
     <div class="form-group">
          <label for="title">Titulo:</label>
          <input type="text" name="title" class="form-control" value="{{$post->title or old('title')}}"/>
     </div>

     <div class="form-group">
          <textarea name="descripcion"  cols="60" rows="5" placeholder="Descripcion...">{{$post->descripcion or old('descripcion') }}</textarea>
     </div>

     <div class="form-group">
          <labe for='url'>Url:</labe>
          <input type="text" name="url" class="form-control" value="{{$post->url or old('url')}}">
     </div>


     <div class="form-group">
          <button type="submit" class="btn btn-primary">Save Post</button>

     </div>
 
     
</form>