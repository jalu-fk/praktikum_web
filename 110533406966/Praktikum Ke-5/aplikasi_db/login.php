<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
        <title>LOG-IN</title>
        <style type = "text/css">
        <!--
        .login{
	margin : 180px 500px 180px 500px;
	background-color : #FFCC33;
	width : 300px;
	height : auto;
	padding : 10px 10px 10px 10px;
	border : 3px solid #A52A2A;
        }
        -->
        </style>
</head>

<body>
<div class = "login">
<h1 align = 'center'>LOG - IN</h1>
<hr/ color = '#FF100%0'>
<form name = "login" action = "cek.php" method = "post">
<table>
<tr>
        <td>Username : </td>
</tr>
<tr>
        <td width = "100px"><input type = "text" name = "user"></td>
</tr>
<tr>
        <td>Password : </td>
</tr>
<tr>
        <td width = "100px"><input type = "password" name = "pass"></td>
</tr>
<tr>
        <td><input type = "submit" name = 'login' value = 'LOGIN' ></td>
</tr>
</table>
</form>
</div>
</body>
</html>