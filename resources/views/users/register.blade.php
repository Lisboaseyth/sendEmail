@extends('layouts.main')

@section('title', 'Cadastre-se')

@section('content')

<div class="container text-center divPage">
    <h1>Cadastre-se!</h1>
    <p>Preencha os dados abaixo para se registrar na plataforma.</p>
    <form class="formRegister" action="/users" method="POST">
        <div class="divForm">
            <span>Nome</span>
            <input id="name" name="name" class="form-control" type="text">
        </div>
        
        <div class="divForm">
            <span>Sobrenome</span>
            <input id="lastName" name="lastName" class="form-control" type="text">
        </div>
        
        <div class="divForm">
            <span>CPF</span>
            <input id="search" id="cpf" name="cpf" class="form-control" type="text">
        </div>
        
        <div class="divForm">
            <span>Email</span>
            <input id="search" id="email" name="email" class="form-control" type="text">
        </div>
        
        <div class="divForm">
            <span>Password</span>
            <input id="search" id="password" name="password" class="form-control" type="password">
        </div>

        <button type="button" class="btn btn-primary btn-lg" style="margin: 20px 0; width: 200px">Enviar</button>
    </form>
</div>

@endsection