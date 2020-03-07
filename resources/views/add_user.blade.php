<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
</head>
<body>
	<h1 align="center">Add User</h1>
<form id="myform" action="form_action" method="post">
	@csrf
	<ol id="mylist">
	  <li>
		<input type="text" name="username[]" id="username1" placeholder="Enter Your UserName" onchange="checkEmail(this)">
		<input type="text" name="age[]" id="age1" placeholder="Enter your age">
		<input type="password" name="password[]" id="password1" placeholder="Enter Password">
	  </li>
	</ol>
	<input type="hidden" name="count" id="count" value="1">
	<button type="button" onclick="addRow()">Add More</button>
	<input type="button" onclick="myForm()" value="submit" />
</form>
<script src="{{asset('js/add_user.js')}}"></script>
</body>
</html>