@extends('layouts.app')

@section('title', 'rambek - Visos prekės')

@section('content')   
<div class="container">
    <div class="starter-template">
        <h1>Visos prekės</h1>

        <div class="row">
            @include('card')
            {{-- <div class="col-sm-6 col-md-4">
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
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/src/img/MX402.jpg" alt="Ausinės Beats Studio3">
                    <div class="caption">
                        <h3>Beats Studio3 Wireless</h3>
                        <p>349,95 &euro;</p>
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
                    <img src="/src/img/gopro-hero8-juoda_xbig.jpg" alt="GoPro Hero8, Juoda">
                    <div class="caption">
                        <h3>GoPro Hero8, Black</h3>
                        <p>379,95 &euro;</p>
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
                    <img src="/src/img/thumb-vaizdo-kamera-panasonic-hc-v770-ep-k-3-640-448.png" alt="Panasonic HC-V770">
                    <div class="caption">
                        <h3>Panasonic HC-V770 EP-K</h3>
                        <p>465,95 &euro;</p>
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
                    <img src="/src/img/420801jpg.jpg" alt="Kavos aparatas DeLongi">
                    <div class="caption">
                        <h3>Kavos aparatas De’Longhi</h3>
                        <p>629,00 &euro;</p>
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
                    <img src="/src/img/32f65e201d39a440052c515e502176d2.jpg" alt="Šaldytuvas Haier">
                    <div class="caption">
                        <h3>Šaldytuvas Haier</h3>
                        <p>621,90 &euro;</p>
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
                    <img src="/src/img/39e9dfeb3fe3c404440174fd3cd725a4.jpg" alt="Trintuvas Moulinex">
                    <div class="caption">
                        <h3>Trintuvas Moulinex DD 8558</h3>
                        <p>63,00 &euro;</p>
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
                    <img src="/src/img/6bf6d0bf56bb621519844381617cf1b4.jpg" alt="Mėsmalė Bosch">
                    <div class="caption">
                        <h3>Mėsmalė Bosch MFW66020</h3>
                        <p>149,95 &euro;</p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button">Į krepšelį</a>
                            <a href="#" class="btn btn-default"
                               role="button">Daugiau</a>
                        </p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>