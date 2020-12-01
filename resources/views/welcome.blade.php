 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Moments</title>

        <link href = "{{ asset('css/app.css') }}" rel="stylesheet"/>
        <link href = "{{ asset('css/style.css') }}" rel="stylesheet"/>
        <link href = "{{ asset('libraries/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"/>

        <style>
            body {

                height: 100%;
                width: 100%;
                margin: 0px;
                overflow-y: hidden;
                overflow-x: hidden;

                font-family: 'Segoe UI', sans-serif;
                background-color: #f1f1f1;
               
            }
        </style>
    </head>
    <body>
        <div id="app">
            <main-app />
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
