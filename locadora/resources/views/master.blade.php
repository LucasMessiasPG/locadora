<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trabalho 2 Bimestre</title>



    <script src="{{ asset('/js/jquery.js') }}"></script>
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/materialize.css') }}"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/default.css') }}"  media="screen,projection"/>
    <script src="{{ asset('/js/materialize.js') }}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="">


@yield('conteudo')
@if($errors->any())
    <script>
        @foreach($errors->all() as $error)
        Materialize.toast("{{$error}}", 4000)
        @endforeach
    </script>
@endif

@if(\Session::has('message'))
    <script>
        Materialize.toast("{{\Session::get('message')}}", 4000)
    </script>
@endif
<!-- Scripts -->

<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
