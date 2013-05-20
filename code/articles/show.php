<?php include('../core.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/index.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>网站首页</title>
<!-- InstanceEndEditable -->
<link href="../style.css" rel="stylesheet" type="text/css" />
<script src="../Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<script src="../Scripts/swfobject_modified.js" type="text/javascript"></script>
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
</head>

<body>
<div id="waibox">
	<div id="header">
	  <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="960" height="200">
	    <param name="movie" value="../images/bantou.swf" />
	    <param name="quality" value="high" />
	    <param name="wmode" value="opaque" />
	    <param name="swfversion" value="9.0.45.0" />
	    <!-- 此 param 标签提示使用 Flash Player 6.0 r65 和更高版本的用户下载最新版本的 Flash Player。如果您不想让用户看到该提示，请将其删除。 -->
	    <param name="expressinstall" value="../Scripts/expressInstall.swf" />
	    <!-- 下一个对象标签用于非 IE 浏览器。所以使用 IECC 将其从 IE 隐藏。 -->
	    <!--[if !IE]>-->
	    <object type="application/x-shockwave-flash" data="../images/bantou.swf" width="960" height="200">
	      <!--<![endif]-->
	      <param name="quality" value="high" />
	      <param name="wmode" value="opaque" />
	      <param name="swfversion" value="9.0.45.0" />
	      <param name="expressinstall" value="../Scripts/expressInstall.swf" />
	      <!-- 浏览器将以下替代内容显示给使用 Flash Player 6.0 和更低版本的用户。 -->
	      <div>
	        <h4>此页面上的内容需要较新版本的 Adobe Flash Player。</h4>
	        <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="获取 Adobe Flash Player" width="112" height="33" /></a></p>
          </div>
	      <!--[if !IE]>-->
        </object>
	    <!--<![endif]-->
      </object>
	</div>
<div id="daohang">
    	<a href="../index.php">首页</a>
        <a href="">班级介绍</a>
        <a href="">新闻动态</a>
        <a href="">学习园地</a>
        <a href="">资料下载</a>
        <a href="">班级日志</a>
        <a href="">班级日志</a>    </div>
  <div id="loginbox">
  <?php 
	if(isset($_SESSION['login'])){
      echo $_SESSION['login'];
      echo "<a href=$root_url/auth/logout.php>登出</a>";
    }else{
      echo "<a href=$root_url/auth/login.php>登录</a>";
    }
  ?>
  </div>
	<div id="content"><!-- InstanceBeginEditable name="LeftBox" -->
	  <div id="leftbox">
      
<?php


$sql="select * from articles where id=$_GET[id]";
$result=mysql_query($sql,$con);
$row=mysql_fetch_array($result);

?>
<p>标题：<?php echo $row['title']; ?></p>

<p>类别：<?php echo $row['tag']; ?></p>
<p>时间：<?php echo $row['created_at']; ?></p>
<p><?php echo $row['body']; ?></p>



      </div>
	  <!-- InstanceEndEditable -->
<div id="rightbox">
            <div id="rbox">
            	<h3>班级日志</h3>
            </div>
            <div id="rbox">
            	<h3>荣誉墙</h3>          	
            </div>
            <div id="rbox">
            	<h3>照片</h3>
            </div>
        </div>
    </div>  
<div id="footer">
  <p>Copyright © 属于顺德李伟强职业技术学校版权所有   <a href="http://www.lwqzx.sdedu.net/kpy/dc/gsites/jsj111/website/team.html#ksd">制作团队</a>   <a href="javascript:window.external.AddFavorite('http://localhost:8080/computernet/person_pic.html#ksd','%E8%AE%A1%E7%AE%97%E6%9C%BA%E5%BA%94%E7%94%A8111%E7%8F%AD%E7%BA%A7%E7%BD%91%E7%AB%99')">加入收藏</a>  <a href="http://www.lwqzx.sdedu.net/kpy/dc/gsites/jsj111/website/#" onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://localhost:8080/computernet/index.html');">设为主页</a><br />
  </p>
  <p>地址：佛山市顺德区大良镇金沙大道4号</p>
</div>          
</div>
<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
</body>
<!-- InstanceEnd --></html>
