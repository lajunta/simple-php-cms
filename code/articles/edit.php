<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>编辑文章</title>
</head>

<body>
<?php
$con=mysql_connect('localhost','root','');
mysql_select_db("phpcms");

$sql="select * from articles where id=$_GET[id]";
$result=mysql_query($sql,$con);
$row=mysql_fetch_array($result);

?>


<h2>编辑文章 </h2>
<form id="form1" name="form1" method="post" action="update.php">
  <p>标题：  </p>
  <p>
    <label for="title"></label>
    <input name="title" type="text" id="title" size="60" value=<?php echo $row['title']; ?> />
  </p>
  <p>类别：</p>
  <p>
    <label for="tag"></label>
    <input type="text" name="tag" id="tag" value=<?php echo $row['tag']; ?> />
  </p>
  <p>内容：</p>
  <p>
    <label for="body"></label>
    <textarea name="body" id="body" cols="60" rows="10"><?php echo $row['body']; ?></textarea>
  </p>
  <p>
  <input name="id" type="hidden" value=<?php echo $row['id']; ?> />
    <input type="submit" name="button" id="button" value="更新文章" />
  </p>
</form>
<p>&nbsp;</p>
</body>
</html>