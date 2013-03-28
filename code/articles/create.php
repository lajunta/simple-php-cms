<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>创建文章</title>
</head>

<body>
<?php

$con=mysql_connect('localhost','root','');
mysql_select_db("phpcms");

$sql="insert into articles(title,body,tag,created_at) values('$_POST[title]','$_POST[body]','$_POST[tag]',now());";
$result=mysql_query($sql,$con);
if($result){
  echo "添加成功";
}else{
  echo "添加失败";
}

mysql_close($con);

?>
</body>
</html>