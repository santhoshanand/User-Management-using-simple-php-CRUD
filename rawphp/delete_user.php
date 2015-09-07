<?PHP 
include("db_connection.php");
$uid=$_GET['id'];
$sql=mysql_query("DELETE FROM user_information WHERE `user_id`='$uid'");
if($sql){
	header("Location: ../list_of_user.php?delete=true");
	}
?>