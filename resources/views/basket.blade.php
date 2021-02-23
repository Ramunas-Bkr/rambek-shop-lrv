@extends('master')

@section('title', 'Krepšelis')

@section('content')
    <div class="starter-template">
        <h1>Krepšelis</h1>
        <p>Užsakymas</p>
        <div class="panel">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Pavadinimas</th>
                    <th>Kiekis</th>
                    <th>Kaina</th>
                    <th>Viso</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <a href="#">
                            <img height="56px" src="/src/img/iphone_11_p_2_1_5.png">
                            iPhone 11 128GB Purple
                        </a>
                    </td>
                    <td><span class="badge">1</span>
                        <div class="btn-group">
                            <a type="button" class="btn btn-danger" href="#"><span
                                    class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
                            <a type="button" class="btn btn-success" href="#"><span
                                    class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
                        </div>
                    </td>
                    <td>759,00 &euro;</td>
                    <td>759,00 &euro;</td>
                </tr>
                <tr>
                    <td colspan="3">Bendra suma:</td>
                    <td>759,00 &euro;</td>
                </tr>
                </tbody>
            </table>
            <br>
            <div class="btn-group pull-right" role="group">
                <a type="button" class="btn btn-success" href="#">Užsakyti</a>
            </div>
        </div>
    </div>