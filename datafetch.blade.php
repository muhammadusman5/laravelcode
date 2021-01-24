<!DOCTYPE html>
<html>
<head>
	<title>new</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
	@foreach ($posts as $post)
        <h4 class="membername">{{ $post->name }}</h4> 
        <h4>{{ $post->father_name }}</h4>
    @endforeach 
</body>
</html>