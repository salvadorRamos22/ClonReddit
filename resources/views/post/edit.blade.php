@extends('layouts.base')

@section('content')

<h2>Editando Post</h2>
@include('layouts._form',['post'=>$post])

@endsection