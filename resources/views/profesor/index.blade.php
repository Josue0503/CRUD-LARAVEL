@extends('admin.app')
@section('titulo', 'profesor')
@section('contenido')
<div class="alert alert-primary" role="alert">
  Welcome i'm teacher {{$id}} 
   @foreach ($frutas as $fruta)
   <br> <br>
{{ $fruta}}
@endforeach
</div>
    
@endsection