<html lang="{{ app()->getLocale() }}">
    <head>
        <title>App Name - @yield('title')</title>
		
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                width: 700px;
                margin: auto;
            }
            
            span {
                text-decoration:underline;
            }
        </style>
    </head>
    <body>
      <div class="content">
        <h1>{{ $title }}</h1>
        <h3>{!! $body !!}
      </div>
    </body>
</html>