@extends('layouts.app')

@section('title', $category)

@section('content')

<div class="container">
    <div class="starter-template">
        <h1>
            @if($category == 'mobile')
                Mobilieji telefonai
            @elseif($category == 'portable')
                Nešiojama technika
            @elseif($category == 'appliance')
                Buitinė technika
            @endif
        </h1>
        <p>
            Čia Jūs rasite populiariausius mobiliuosius telefonus už patrauklią kainą
        </p>
        <div class="row">
           <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/src/img/iphone_se_white2_4.png" alt="iPhone SE 64GB">
                    <div class="caption">
                        <h3>iPhone SE 64GB White</h3>
                        <p>499,00 &euro;</p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button">Į krepšelį</a>
                            <a href="{{ url('/mobile/iPhone_SE_64GB') }}" class="btn btn-default"
                               role="button">Daugiau</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/src/img/iphone12_blue_1_1.png" alt="iPhone 12 256GB">
                    <div class="caption">
                        <h3>iPhone 12 256GB Blue</h3>
                        <p>1 039,00 &euro;</p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button">Į krepšelį</a>
                            <a href="#" class="btn btn-default"
                               role="button">Daugiau</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/src/img/blackf_1_5.png" alt="iPhone XR">
                    <div class="caption">
                        <h3>iPhone XR 128GB Black</h3>
                        <p>659,00 &euro;</p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button">Į krepšelį</a>
                            <a href="#" class="btn btn-default"
                               role="button">Daugiau</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/src/img/iphone_11_p_2_1_5.png" alt="iPhone 11 128GB">
                    <div class="caption">
                        <h3>iPhone 11 128GB Purple</h3>
                        <p>759,00 &euro;</p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button">Į krepšelį</a>
                            <a href="#" class="btn btn-default"
                               role="button">Daugiau</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>