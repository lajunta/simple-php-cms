<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>创建用户</title>
</head>

<body>
<?php

$con=mysql_connect('localhost','root','');
mysql_select_db("phpcms");

$sql="insert into users(login,password,realname) values('$_POST[login]','$_POST[password]','$_POST[realname]');";
$result=mysql_query($sql,$con);
if($result){
  echo "添加用户成功";
}else{
  echo "添加用户失败";
}

mysql_close($con);

?>
</body>
</html>
