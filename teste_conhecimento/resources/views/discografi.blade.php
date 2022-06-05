@extends('main')

@section('title','discografia')
    

@section('content')
    
<p class="pt-5 ml-3">Digite a palavra chave</p>
<form action="#" method="get" class="text-center  ">

<input type="text" name="" id="">
<button class="btn btn-primary" type="submit" id="search" name="search" placeholder="buscar">procurar</button>

</form>
<div class="text-center" >
@foreach ($albums as $albums )
    <p>{{$albums->nome}} --{{$albums->ano}}</p>
@endforeach

</div>

<a href="/cadastro" class="btn btn-primary">cadastro</a>

@endsection