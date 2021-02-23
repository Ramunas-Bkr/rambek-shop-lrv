<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="/src/css/bootstrap.min.css" rel="stylesheet">
    <link href="/src/css/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ url('/') }}">rambek elektroninė parduotuvė</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li  class="active" ><a href="{{ url('/') }}">Visos prekės</a></li>
                <li ><a href="{{ url('/categories') }}">Kategorijos</a>
                </li>
                <li ><a href="#">Į krepšelį</a></li>
                <li><a href="#">Nunulinti projetą</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Administratoriaus panelė</a></li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

</body>
</html>