@extends('app')

@section('title', 'Dúvidas')

@section('header-content')
    <div class="header-content">
        <div class="header-info">
            <h1 class="header-title">@yield('title')</h1>
            <p class="header-text">
                <b>Listamos aqui algumas dúvidas frequentes,</b><br>
                caso a sua dúvida não esteja aqui você pode<br>
                entrar em contato conosco <a href="">clicando aqui</a></p>
        </div>
    </div>
@endsection

@section('content')
        <section id="content">
            @foreach ($questions as $question)
                <x-question :question="$question"/>
            @endforeach
        </section>
@endsection


