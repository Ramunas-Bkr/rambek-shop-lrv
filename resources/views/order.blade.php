@extends('master')

@section('title', 'Užsakyti')

@section('content')
    <div class="starter-template">
        <h1>Patvirtinkite savo užsakymą:</h1>
        <div class="container">
            <div class="row justify-content-center">
                <p>Bendra užsakymo suma: <b>759,00 &euro;</b></p>
                <form action="#" method="POST">
                    <div>
                        <p>Nurodykite savo vardą ir telefono numerį ir mūsų vadybininkas susisieks su Jumis:</p>

                        <div class="container">
                            <div class="form-group">
                                <label for="name" class="control-label col-lg-offset-3 col-lg-2">Vardas: </label>
                                <div class="col-lg-4">
                                    <input type="text" name="name" id="name" value="" class="form-control">
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="form-group">
                                <label for="phone" class="control-label col-lg-offset-3 col-lg-2">Telefono numeris: </label>
                                <div class="col-lg-4">
                                    <input type="text" name="phone" id="phone" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <br>
                        <input type="hidden" name="_token" value="qhk4riitc1MAjlRcro8dvWchDTGkFDQ9Iacyyrkj">					<br>
                        <input type="submit" class="btn btn-success" href="#" value="Patvirtinti užsakymą">
                    </div>
                </form>
            </div>
        </div>
    </div>