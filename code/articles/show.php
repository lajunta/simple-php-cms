<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新建文章</title>
</head>

<body>
<?php
$con=mysql_connect('localhost','root','');
mysql_select_db("phpcms");

$sql="select * from articles where id=$_GET[id]";
$result=mysql_query($sql,$con);
$row=mysql_fetch_array($result);

?>
<p>标题：<?php echo $row['title']; ?></p>

<p>类别：<?php echo $row['tag']; ?></p>
<p>时间：<?php echo $row['created_at']; ?></p>
<p><?php echo $row['body']; ?></p>

</body>
</html>