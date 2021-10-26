<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>


        </style>
    </head>
    <body>
  <h1>Contacts</h1>

  <nav> 
                    <a href="{{ route('homepage')}}">Home</a>
                    <a href="{{ route('about')}}">About</a>
                    <a href="{{ route('contacts')}}">Contacts</a>
        </nav>

    </body>
</html>
