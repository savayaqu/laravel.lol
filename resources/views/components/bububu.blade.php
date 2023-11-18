<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>
<header style="height: 150px; background: #1a202c; color: whitesmoke">Шапка</header>
<main>{{$slot}}</main>
<footer style="height: 300px; background: #718096; color: whitesmoke">Подвал</footer>
</body>
</html>
