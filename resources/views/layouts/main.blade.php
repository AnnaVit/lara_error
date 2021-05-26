<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        header, .content{
            display: flex;
            justify-content: space-between;
        }
        .content{
            display: flex;
            justify-content: space-around;
        }

        .pagination{
            display: flex;
            list-style-type: none;
            width: 10%;
            justify-content: space-between;

        }
    </style>
</head>
<body>
<header>
    <div class = 'head'>
        <h1>Новости</h1>
    </div>
    @include('blocks.menu')

</header>
<div class = 'content'>
    @yield('content')

</div>
<div class= 'news'>
    @yield('news')
    @yield('article')
</div>
<footer>фуутер</footer>
</body>
</html>
