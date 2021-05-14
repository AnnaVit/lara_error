<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <style>
        .content{
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>

    @include('blocks.menu')

<div class="content">
    @yield('news')
</div>

</body>
</html>
