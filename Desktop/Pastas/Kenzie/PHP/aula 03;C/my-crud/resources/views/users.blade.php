@extends('layouts.main')

@section('title', 'Área Login')

@section('content')

<h1>
    Tela de busca
</h1>
@if($find != '')
    <p>Você está procurando por: {{$find}}</p>
@endif;

@endsection