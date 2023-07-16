@extends('layouts.main')

@section('title', 'Cadastre-se')

@section('content')

<div class="container text-center divPage">
    <h1>Área do Login!</h1>
    <p>Preencha os dados abaixo para entrar na plataforma.</p>
    <form class="formRegister" action="">
         
        <div class="divForm">
            <span>Email</span>
            <input id="search" class="form-control" type="text">
        </div>
        
        <div class="divForm">
            <span>Password</span>
            <input id="search" class="form-control" type="password">
        </div>

        <button type="button" class="btn btn-primary btn-lg" style="margin: 20px 0; width: 200px">Enviar</button>
    </form>
</div>

@endsection