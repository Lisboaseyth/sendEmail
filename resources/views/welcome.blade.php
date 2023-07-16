@extends('layouts.main')

@section('title', 'Área Login')

@section('content')

<div class="container text-center" style="padding-top: 55px;">
    @auth
    <h1>Automatize seu email!</h1>
    <p>Preencha os dados abaixo para automatizar o envio de emails.</p>
    <form action="{{ route('email.store') }}" method="post">
    {{ csrf_field() }}
        @if(count($errors) > 0)
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Preencha os dados corretamente!</strong>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        @if($message = Session::get('sucess'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{$message}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <div class="divForm">
            <span>Subject:</span>
            <input name="subject" class="form-control" type="text"> 
        </div>
        <div class="divForm">
            <span>Message:</span>
            <textarea name="message" class="form-control"></textarea>
        </div>
        <div class="divForm">
            <span>Emails List:</span>
            <textarea name="emails-list" class="form-control" placeholder="email@mail.com, email2@mail.com, ..."></textarea>
        </div>
        <button id="sendBtn" type="submit" class="btn btn-primary btn-lg" style="margin: 20px 0; width: 200px">Enviar</button>
    </form>
    @endauth
    @guest
    <h1>Seja bem-vindo a plataforma de automação</h1>
    <h2>em envio de emails</h2>
    <img style="width: 30%; min-width: 200px;" src="/logoEmail.jpg" alt="img-Email">
    <h3>Faça seu cadastro para usar a plataforma!</h3>
    @endguest
</div>

@endsection