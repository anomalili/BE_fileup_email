<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>A Lannisterek üfvözletüket küldik</title>


</head>

<body>
    <h1>{{ $mailData['title'] }}</h1>
    <p>{{ $mailData['body'] }}</p>
    <h3>Szia uram</h3>
    <img src="https://static.smalljoys.me/2018/10/10-48.jpg" alt="">
    <h1>CICAMICA</h1>

</body>

</html>