<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>核酸检测登记系统</title>
</head>
<body>
	<div class='div_parent'>
		<h2>核酸检测登记</h2>
		<form action='_reg.php' method='post' class='index_form'>
			<label >姓名:</label>
			<input type='text' name='fullname' ><br>
			<label >宿舍:</label>
			<input type='text' name='dorm' placeholder='16栋202'><br>
			<label >手机号:</label>
			<input type='text' name='telephone'><br>
			<label >学院:</label>
			<select name='college'>
				<option value='医学院'>医学院</option>
				<option value='教育学院'>教育学院</option>
				<option value='机电学院'>机电学院</option>
				<option value='计科院'>计科院</option>
			</select>
			<br>
			<label >班级:</label>
			<input type='text' name='class' placeholder='软件202101'><br>
			<label >辅导员:</label>
			<input type='text' name='counseller'><br>
			<input type='submit' value='提交'>
		</form>
	<div>
</body>
</html>