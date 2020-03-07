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
			<form action="create-module">
				@csrf
				<input type="text" name="module">
				<input type="submit">
			</form>
		<table>
			<tr>
				<th>Id</th>
				<th>Role</th>
				<th>Edit</th>
			</tr>
			@foreach($modules as $module)
			<tr>
				<th>{{ $module->id }}</th>
				<th>{{ $module->module_name }}</th>
				<th><a href="edit-module/{{ $module->id }}">edit</a></th>
			</tr>

			@endforeach
		</table>

	</div>
</body>
</html>