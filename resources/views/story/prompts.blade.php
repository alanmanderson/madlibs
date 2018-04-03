<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        <h1>Story id: {{$story->id}}</h1>
        <form method="post" action="/stories/{{$story->id}}">
    		@foreach($story->template->prompts as $prompt)
    		    <h2>{{$prompt->ordinal_rank}}: {{$prompt->text}}<br>
    		@endforeach
        	<!-- <button type="submit">Submit</button> -->
        	<h1>Send text to 203.456.9956</h1>
        	<h2>Your text should be in the following format:</h2>
        	<h2>&lt;story id&gt; &lt;prompt id&gt; &lt;selected word&gt;<br>
        	<h3>For example, if I wanted to submit foxes for number 6 I would text "{{$story->id}} 6 foxes".
        </form>
    </body>
</html>