@extends('layouts.app')

@section('title', 'rambek - Prekė')

@section('content')   
    <div class="starter-template">
        <h1>iPhone SE 64GB White</h1>
        <h3>{{ $product }}</h3>
        <p>Kaina: <b>499,00 &euro;</b></p>
        <img src="/src/img/iphone_se_white2_4.png">
        <p>Puikus galingas telefonas su 64 GB atmintimi</p>
        <a class="btn btn-success" href="#">Į krepšelį</a>
    </div>