<?PHP session_start();?>
<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Studnet Payroll Management System</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="head-section" class="container-fluid"> 
	<div id="navigation-bar" class="container">
            <div class="logo-holder">
                <h3 style="color:#0cf;"><span class="fa fa-graduation-cap" style="margin-right:10px;"></span>Student Payroll <span style="color:#ddd;font-size:18px;">Management System</span></h3>
            </div><!--///logo holder ends here////-->
            <nav class="navigation">
            <ul>
            	<li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="">About Us</a></li>
                <?PHP if(isset($_SESSION['user_id'])){?>
                   <li><a href="list_of_user.php">List Of Users</a></li>
        <li><a href="profile.php">Profile</a></li>
 <li><a href="registration_form.php">Registration</a></li>
                                   <li><a href="rawphp/logout.php">Log Out</a></li>

<?PHP } ?>
                <?PHP if(!isset($_SESSION['user_id'])){?>

                <li><a href="login_form.php">Login</a></li>
               

                <?PHP }?>
            <ul>
            </nav>
    </div><!--/////////////NAVIGATION BAR ENDS HERE-->
</div><!--/////////HEAD SECTION ENDS HERE///////-->