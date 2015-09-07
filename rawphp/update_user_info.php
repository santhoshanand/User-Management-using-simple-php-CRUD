<?PHP 
include_once("db_connection.php");
$uid=$_POST['uid'];
$fullName=preg_replace("/'/","\'",trim(strip_tags(stripslashes($_POST['fname']))));
$userName=preg_replace("/'/","\'",trim(strip_tags(stripslashes($_POST['username']))));
$email=preg_replace("/'/","\'",trim(strip_tags(stripslashes($_POST['email']))));
$password=preg_replace("/'/","\'",trim(strip_tags(stripslashes($_POST['password']))));
$roll=preg_replace("/'/","\'",trim(strip_tags(stripslashes($_POST['studentRoll']))));
$class=preg_replace("/'/","\'",trim(strip_tags(stripslashes($_POST['class']))));
$batch=preg_replace("/'/","\'",trim(strip_tags(stripslashes($_POST['batch']))));
$session=preg_replace("/'/","\'",trim(strip_tags(stripslashes($_POST['session']))));


////////////////////////////////////////////////////
// ///////////////file section start ///////////////
////////////////////////////////////////////////////

function file_newname($path, $filename){
    if ($pos = strrpos($filename, '.')) {
           $name = substr($filename, 0, $pos);
           $ext = substr($filename, $pos);
    } else {
           $name = $filename;
    }

    $newpath = $path.'/'.$filename;
    $newname = $filename;
    $counter = 0;
    while (file_exists($newpath)) {
           $newname = $name .'_'. $counter . $ext;
           $newpath = $path.'/'.$newname;
           $counter++;
     }

    $_FILES["userimage"]["name"]= $newname;
	return $_FILES["userimage"]["name"];
}// function ends here 


  if ($_FILES["userimage"]["name"] !=""){

if ((($_FILES["userimage"]["type"] == "image/gif")
|| ($_FILES["userimage"]["type"] == "image/jpeg")
|| ($_FILES["userimage"]["type"] == "image/png")
|| ($_FILES["userimage"]["type"] == "image/bmp")
|| ($_FILES["userimage"]["type"] == "image/pjpeg"))
&& ($_FILES["userimage"]["size"] < 200*1024))// 150kb into byte 
  {
  if ($_FILES["userimage"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["userimage"]["error"] . "<br />";
    }
  else
    {
	
      
		if (file_exists("../images/member/" . $_FILES["userimage"]["name"]))
      {
     file_newname("../images/member/", $_FILES["userimage"]["name"]);
	 
	  move_uploaded_file($_FILES["userimage"]["tmp_name"],
      "../images/member/" . $_FILES["userimage"]["name"]);
     
	  $image = "images/member/" . $_FILES["userimage"]["name"];
 
	 
	 

      }
    else
      {
      move_uploaded_file($_FILES["userimage"]["tmp_name"],
      "../images/member/" . $_FILES["userimage"]["name"]);
      
	  $image = "images/member/" . $_FILES["userimage"]["name"];


      }
    }
  }
else
  {
 echo "<script type='text/javascript'>\n";
echo "alert('Invalid file format or File size is larger than required!');\n";
echo "window.history.go(-1);\n";
echo "</script>";
exit();
  }
  }// check whether thie image field is empty or not 
  else{
	  $image=$_POST['oldimage'];
	  }
  
////////////////////////////////////////////////////
// ///////////////file section ends  ///////////////
////////////////////////////////////////////////////



$sql=mysql_query("UPDATE  user_information SET `full_name`='$fullName',
`user_name`='$userName',`email`='$email',`password`='$password',`avatar`='$image',
`roll`='$roll',`batch`='$batch',`class`='$class',`session`='$session' WHERE `user_id`='$uid'");
if($sql){

	echo "<script type='text/javascript'>\n";
	echo "alert('Information has been updated successfully.thank You');\n";
	echo "window.history.go(-1)\n";
	echo "</script>";
	}

else{
	echo mysql_error();
	
	}

?>