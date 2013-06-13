<?php include("core.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>

<?php
  
   //创建文章表
   $sql="create table articles(id int not null auto_increment primary key,title varchar(200),body text,author varchar(50),tag varchar(50),created_at datetime,updated_at datetime)";
   $result=mysql_query($sql,$con);
   if($reslt){echo "创建文章表成功";}else{echo "文章表已经存在";}

   
   //创建用户表
   $sql="create table users(id int not null auto_increment primary key,login varchar(50),password varchar(200))";
   $result=mysql_query($sql,$con);
   if($reslt){echo "创建用户表成功";}else{echo "用户表已经存在";}
   
  
   //创建admin用户
   $sql="select * from users where login='admin'";
   $result=mysql_query($sql,$con);
   if(!$result){
   	 $sql="insert into users(login,password) values('admin','admin')";
	 mysql_query($sql,$con); 
	 echo "创建用户表成功";
   }else{
      echo "用户已经存在";
   }
/* 
   
   */
   
?>
</body>
</html>
