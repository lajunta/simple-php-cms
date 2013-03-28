<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新建文章</title>
</head>

<body>
<h2>新建文章 </h2>
<form id="form1" name="form1" method="post" action="create.php">
  <p>标题：  </p>
  <p>
    <label for="title"></label>
    <input name="title" type="text" id="title" size="60" />
  </p>
  <p>类别：</p>
  <p>
    <label for="tag"></label>
    <input type="text" name="tag" id="tag" />
  </p>
  <p>内容：</p>
  <p>
    <label for="body"></label>
    <textarea name="body" id="body" cols="60" rows="10"></textarea>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="创建文章" />
  </p>
</form>
<p>&nbsp;</p>
</body>
</html>