<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="checkbox_insert.php">
	name
	<input type="text" name="name" placeholder="name" value="name">
	<br>

	Education
	<input type="checkbox" name="education[]" value="education">10th
	<input type="checkbox" name="education[]" value="education">12th
	<input type="checkbox" name="education[]" value="education">B.tech
	<input type="checkbox" name="education[]" value="education">M.tech
	<br>
	<input type="submit" name="submit" class="submit">
</form>
</body>
</html>