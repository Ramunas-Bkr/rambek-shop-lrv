@extends('layouts.app')

@section('title', 'rambek - Kategorijos')

@section('content')   

<div class="container">
    <div class="starter-template">
        @foreach ($categories as $category)
            <div class="panel">
            <a href="/{{$category->code}}">
                <img src="/src/img/mobile.jpg">
                <h2>{{ $category->name }}</h2>
            </a>
            <p>
                {{ $category->description }}
            </p>
        </div>
        @endforeach       
     
    </div>
</div>