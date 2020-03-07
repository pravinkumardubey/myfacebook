<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div id="main">
		@if($errors)

		@endif
			<a href="welcome">Role</a>
			<a href="module-list">Module</a>
			<a href="role-assign-model">Role Assign Module</a>
			<a href=""></a>
			<form action="{{route('create-roll')}}" method="post">
				@csrf
				<input type="text" name="role">
				<input type="submit">
			</form>
		<table>
			<tr>
				<th>Id</th>
				<th>Role</th>
				<th>Edit</th>
			</tr>
			@foreach($role as $roles)
			<tr>
				<th>{{ $roles->id }}</th>
				<th>{{ $roles->role }}</th>
				<th><a href="edit-role/{{ $roles->id }}">edit</a></th>
			</tr>

			@endforeach
		</table>

	</div>
</body>
</html>