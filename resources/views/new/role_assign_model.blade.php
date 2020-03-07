<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div id="main">
			<a href="welcome">Role</a>
			<a href="module-list">Module</a>
			<a href="role-assign-model">Role Assign Module</a>
			<a href=""></a>
			<form action="save-role-assign-model">
				@csrf
				<select name="role">
					<option value="">--Choose Role--</option>
					@foreach($roleList as $roles)
					<option value="{{$roles->id}}">{{$roles->role}}</option>
					@endforeach
				</select><br>
				<select multiple name="modules[]">
					<option value="" disabled>--Choose Modules--</option>
					@foreach($moduleList as $modules)
					<option value="{{$modules->id}}">{{$modules->module_name}}</option>
					@endforeach
				</select><br>
				<input type="submit">
			</form>
	</div>
</body>
</html>