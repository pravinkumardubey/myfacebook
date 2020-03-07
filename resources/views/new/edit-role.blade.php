<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="{{route('update-role')}}" method="post">
		@csrf
		<input type="text" name="role" value="{{$res->role}}">
		<input type="hidden" name="id" value="{{$res->id}}">
		<input type="submit">
	</form>
</body>
</html>