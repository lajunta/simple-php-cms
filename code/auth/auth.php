<?php

  session_start();
  $con=mysql_connect("localhost","root","");
  mysql_select_db("phpcms",$con);

  $sql="select * from users where login='$_POST[login]' and password='$_POST[password]'";

  $result=mysql_query($sql,$con);
  $row=mysql_fetch_array($result);
  $realname=$row['realname'];
  if($row){
    $url="../articles/index.php";
    $_SESSION['login']=$_POST['login'];
    $_SESSION['realname']=$_POST['realname'];
  }else{
    echo "登录名或者密码错误";
    $url="login.php";
  }
  header("Location: $url"); //返回指定的url

?>
