<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		#main{
			height: 200px;width: 300px;background: #ccc;margin: 100px auto;
		}input{
			margin-left: 60px;margin-top: 15px;
		}
	</style>
</head>
<body>
	<div id="main">
		<form action="{{route('xyz')}}" method="post">
			{{csrf_field()}}
		<input type="email" name="email" placeholder="Email"><br>
		<input type="password" name="pass" placeholder="Password"><br>
		<input type="submit">
	</form> 
	</div>
</body>
</html>