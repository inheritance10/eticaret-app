@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="jumbotron text-center">
            <h1>404</h1>
            <H2>Aradığınız sayfa bulunamadı</H2>
            <a href="{{route('mainpage')}}" class="btn btn-primary">Anasayfaya geri dön</a>
        </div>
    </div>
@endsection
