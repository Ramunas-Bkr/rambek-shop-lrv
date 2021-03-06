@extends('layouts.app')

@section('title', 'rambek - ' . $category->name)

@section('content')

<div class="container">
    <div class="starter-template">
        <h1>{{ $category->name }}</h1>
        <p>
            {{ $category->description }}
        </p>
        <div class="row">
            @include('card', ['category' => $category])          
        </div>
    </div>
</div>