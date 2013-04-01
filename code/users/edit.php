<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>编辑用户</title>
</head>

<body>
<?php
$con=mysql_connect('localhost','root','');
mysql_select_db("phpcms");

$sql="select * from articles where id=$_GET[id]";
$result=mysql_query($sql,$con);
$row=mysql_fetch_array($result);

?>


<h2>编辑用户 </h2>
<form id="form1" name="form1" method="post" action="update.php">
  <p>登录名：  </p>
  <p>
    <label for="login"></label>
    <input name="login" type="text" id="login" value=<?php echo $row['login']; ?> />
  </p>
  <p>密码：</p>
  <p>
    <label for="password"></label>
    <input type="password" name="password" id="password" value=<?php echo $row['password']; ?> />
  </p>
  <p>真实姓名：</p>
  <p>
    <label for="realname"></label>
    <input type="realname" name="realname" id="realname" value=<?php echo $row['realname']; ?> />
  </p>
  <p>
  <input name="id" type="hidden" value=<?php echo $row['id']; ?> />
    <input type="submit" name="button" id="button" value="更新用户" />
  </p>
</form>
<p>&nbsp;</p>
</body>
</html>
