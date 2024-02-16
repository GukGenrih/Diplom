<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;lang=en" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<header>
    <a href="{{route('index')}}" class="header_link">Главная</a>
    <a href="{{route('groupCreate')}}" class="header_link">Добавление Группы</a>
    <a href="{{url('/')}}" class="header_link">Добавление Cтудента</a>
    <div>
        <a href="{{route('supervisors')}}" class="header_link">Все Класс.Руководители</a>
        <a href="{{route('superCreate')}}" class="header_link">Добавление Класс.Руководителя</a>
    </div>
</header>
@yield('content')
</body>
</html>
