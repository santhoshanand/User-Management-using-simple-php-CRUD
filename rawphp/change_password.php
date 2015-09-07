<?PHP 
include_once("db_connection.php");
$userName=preg_replace("/'/","\'",trim(strip_tags(stripslashes($_POST['username']))));
$oldpswd=preg_replace("/'/","\'",trim(strip_tags(stripslashes($_POST['oldpswd']))));
$newpswd=preg_replace("/'/","\'",trim(strip_tags(stripslashes($_POST['newpswd']))));
$sql=mysql_query("SELECT * FROM user_information WHERE `password`='$oldpswd' AND `user_name`='$userName'");
$count=mysql_num_rows($sql);
if($count>0){
	$sql2=mysql_query("UPDATE user_information SET `password`='$newpswd' WHERE `user_name`='$userName'");
	if($sql2){
		
	echo "<script type='text/javascript'>\n";
	echo "alert('Your password has been changed  successfully.thank You');\n";
	echo "window.history.go(-1)\n";
	echo "</script>";
		}
	}
else{
	
	echo "<script type='text/javascript'>\n";
	echo "alert('User name or current password does not exist.');\n";
	echo "window.history.go(-1)\n";
	echo "</script>";
	}

?>