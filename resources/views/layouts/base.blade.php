<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
     
     <title>Reddir</title>
</head>
<body>
     <div class="container">
          <div class="row">
               <div class="col-md-12">
                    <h1><a href="{{route('posts_path')}}">Reddit</a> </h1>
                    <h1>
                         <small class="pull-right">
                              <a href="{{route('create_path')}}">Crear post</a>
                         </small>
                    </h1>
               </div>
          </div>
          <hr>
          @include('post.error')
          @include('layouts._mensaje')
          <div class="container">
               @yield('content')
          </div>
     </div>
</body>
</html>