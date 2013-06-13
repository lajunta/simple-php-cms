<?php session_start();
$root_url="/jsj111/lajunta";
$con=mysql_connect('localhost','zxy','zxy');
mysql_select_db("zxy");

function is_admin(){
	if(isset($_SESSION['admin'])){
		return true;
	}else{
		return false;
	}
}
function check_admin(){
	global $root_url;
	if(!is_admin()){
		header("Location:$root_url");
	}
}

function taglist($tag,$num=5){
	global $root_url;
    $con=mysql_connect('localhost','zxy','zxy');
     mysql_select_db("zxy");
	$sql="select * from articles where tag='$tag'";
	$result=mysql_query($sql,$con);
	if($result){
		echo "<ul>";
		while($row=mysql_fetch_array($result)){
			echo "<li><a href=$root_url/articles/show.php?id=$row[id]>$row[title]</a></li>";
		}
		echo "</ul>";
	}else{
		echo "no data";
	}
}

?>
