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
        </style>
    </head>
    <body>
        <h1>Story id: {{$story->id}}</h1>
        <form method="post" action="/stories/{{$story->id}}">
    		@foreach($story->template->prompts as $prompt)
    		    <h2>{{$prompt->ordinal_rank}}: {{$prompt->text}}<br>
    		@endforeach
        	<!-- <button type="submit">Submit</button> -->
        	<h1>Send text to 2034568009</h1>
        	<h2>Your text should be in the following format:</h2>
        	<h2>&lt;story id&gt; &lt;prompt id&gt; &lt;selected word&gt;<br>
        	<h3>For example, if I wanted to submit foxes for number 6 I would text "{{$story->id}} 6 foxes".
        </form>
    </body>
</html>
