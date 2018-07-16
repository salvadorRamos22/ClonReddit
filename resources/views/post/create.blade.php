@extends('layouts.base')

@section('content')
<h2>Creando post</h2>
@include('layouts._form',['post'=>$post])

@endsection