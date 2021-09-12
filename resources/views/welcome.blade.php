<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
        <title>Fast Food</title>


    </head>
    <style>
        *
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
    <body>

        <div  id="app">
            <app></app>
        </div>
        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
