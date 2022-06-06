@extends('main')

@section('title','Cadastrar')
    

@section('content')
    

<form action="/cadastro/store" method="post">
@csrf
<input type="text" name="nome" id="nome">
<input type="text" name="ano" id="ano">
<button class="btn btn-primary" type="submit">primary</button>

</form>



@endsection