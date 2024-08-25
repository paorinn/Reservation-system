@extends('layouts.simple')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shop.css') }}">
@endsection

@section('content')
<header>
    <button class="back-button">
        <i class="fas fa-chevron-left"></i>
    </button>
    <h1>{{ $shop->name }}</h1>  
    <p>{{ $shop->description }}</p>  
</header>