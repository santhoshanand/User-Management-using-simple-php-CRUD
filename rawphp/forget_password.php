<?PHP 
include_once("db_connection.php");
$userName=preg_replace("/'/","\'",trim(strip_tags(stripslashes($_POST['username']))));
$email=preg_replace("/'/","\'",trim(strip_tags(stripslashes($_POST['email']))));
$sql=mysql_query("SELECT * FROM user_information WHERE `user_name`='$userName' AND `email`='$email'");
$count=mysql_num_rows($sql);
if($count>0){
	$row=mysql_fetch_array($sql);
	$password=$row['password'];
	$to=$email;
	$subject="Password Recovery ";
	$message="Your Password is ".$password;
	mail($to,$subject,$message);
		echo "<script type='text/javascript'>\n";
	echo "alert('An email has been sent to your email address with password.Please keep it safely');\n";
	echo "window.history.go(-1)\n";
	echo "</script>";
	}
else{
	echo "<script type='text/javascript'>\n";
	echo "alert('User Name or Email Does not exist.Try again');\n";
	echo "window.history.go(-1)\n";
	echo "</script>";
	}
?>