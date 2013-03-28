<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>文章列表</title>
</head>

<body>
<?php

$con=mysql_connect('localhost','root','');
mysql_select_db("phpcms");

if(isset($_GET['title'])){
  $sql="select * from articles where title LIKE '%$_GET[title]%'";
}elseif(isset($_GET['tag'])){
  $sql="select * from articles where tag='$_GET[tag]'";
}else{
  $sql="select * from articles";
}
$result=mysql_query($sql,$con);
?>

<h2>文章列表</h2>

<form action="" method="get">
文章标题：
<input name="title" type="text" />
<input name="submit" type="submit" value="查询" />
</form>

<p>
  <?php
echo "<table>\n";
while($row=mysql_fetch_array($result)){
   echo "\t<tr>\n";
   echo "\t\t<td><a href=show.php?id=$row[id]>$row[title]</a></td>\n";
   echo "\t\t<td>$row[tag]</td>\n";
   echo "\t\t<td>$row[created_at]</td>\n";
   echo "\t\t<td><a href=edit.php?id=$row[id]>编辑</a></td>\n";
   echo "\t\t<td><a href=delete.php?id=$row[id]>删除</a></td>\n";
   echo "\t</tr>\n";
}
echo "</table>\n";

mysql_close($con);

?>
</p>
<hr />
<p><a href="new.php">新建文章</a></p>
</body>
</html>