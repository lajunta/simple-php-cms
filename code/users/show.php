<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户信息</title>
</head>

<body>

<?php
$con=mysql_connect('localhost','root','');
mysql_select_db("phpcms");

$sql="select * from users where id=$_GET[id]";
$result=mysql_query($sql,$con);
$row=mysql_fetch_array($result);
?>

<p>登录名：<?php echo $row['login']; ?></p>
<p>密码：<?php echo $row['password']; ?></p>
<p>真实姓名：<?php echo $row['realname']; ?></p>

</body>
</html>
