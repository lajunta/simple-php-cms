<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>更新用户</title>
</head>

<body>
<?php

$con=mysql_connect('localhost','root','');
mysql_select_db("phpcms");

$sql="update users set login='$_POST[login]',password='$_POST[password]',realname='$_POST[realname]' where id=$_POST[id];";
$result=mysql_query($sql,$con);
if($result){
  echo "更新成功";
}else{
  echo "更新失败";
}

mysql_close($con);

?>
</body>
</html>
