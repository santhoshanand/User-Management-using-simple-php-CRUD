<?PHP 

include_once("db_connection.php");
$userName=preg_replace("/'/","\'",trim(strip_tags(stripslashes($_POST['username']))));
$password=preg_replace("/'/","\'",trim(strip_tags(stripslashes($_POST['password']))));

$sql=mysql_query("SELECT * FROM user_information WHERE `user_name`='$userName' AND `password`='$password'");
if($sql){
$count=mysql_num_rows($sql);
if($count>0){
	$row=mysql_fetch_array($sql);
	session_start();
	$_SESSION['user_id']=$row['user_id'];
	header('Location: ../list_of_user.php');
	}
else{
	
	echo "<script type='text/javascript'>\n";
	echo "alert('User Name or Password did not match');\n";
	echo "window.history.go(-1)\n";
	echo "</script>";	}
}
else{
	echo mysql_error();
	}
?>