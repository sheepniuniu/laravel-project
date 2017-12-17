<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="http://localhost/laravel/public/test" method="post" >
		<input type="text" name="name">输入
		{{csrf_field()}}
		<input type="submit" name="提交">
	</form>
</body>
</html>