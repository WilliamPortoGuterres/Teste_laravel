@extends('main')

@section('title','Cadastrar')
    

@section('content')
    

<form action="/cadastro/store" method="post">
@csrf
<input type="text" name="nome" id="nome">
<button class="btn btn-primary" type="submit">primary</button>
dohgaerçkdghaodgvh
</form>



@endsection