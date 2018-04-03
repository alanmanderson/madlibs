<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        <form method="post" action="/stories">
        	<select name="template_id">
        		@foreach($templates as $template)
        		    <option value="{{$template->id}}">{{$template->title}}</option>
        		@endforeach
        	</select>
        	<button type="submit">Create</button>
        </form>
    </body>
</html>