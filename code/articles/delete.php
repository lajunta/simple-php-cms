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

$sql="delete from articles  where id=$_GET[id];";
$result=mysql_query($sql,$con);
if($result){
  echo "删除成功";
}else{
  echo "删除失败";
}

mysql_close($con);

?>
</body>
</html>