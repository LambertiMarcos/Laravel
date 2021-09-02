@extends('layouts.admin')

@section('title', 'Configurações')

@section('content')
<div class="w3-container">
    <h1>Pagina view de Configurações</h1>
    <p>Meu nome é {{$nome}}. Eu tenho {{$idade}} anos.<br/></p>
</div>

@if($idade<18)
<div class="w3-container">
    @component('components.alert')
    Você é <strong>Menor</strong> de idade!</p>
    @endcomponent
    
</div>
@elseif($idade>18 && $idade<65)
<div class="w3-container">
    @component('components.alert')
    Você é um <strong>adulto</strong> em idade de trabalhar!</p>
    @endcomponent
    <p></p>
</div>    
@elseif ($idade > 15)
<div class="w3-container">
    @component('components.alert')
    Você já pode se <strong>aposentar</strong>!</p>
    @endcomponent
</div>    
@endif

<h5 class="w3-container w3-gray">versão do sistema : {{$versao}}</h5>

<form method="POST" action="">
    @csrf 
    
    Nome:</br>
    <input type="text" name="nome" /><br/>
    Idade:</br>
    <input type="text" name="idade" /><br/>
    Cidade:</br>
    <input type="text" name="cidade" /><br/><br/>

    <input type="submit" value="Enviar" /><br/>
</form>
<a href="/Laravel/l_projeto1/public/config/info">Informações</a>
@endsection