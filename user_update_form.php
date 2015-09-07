<?php include_once("header.php");
include_once("rawphp/db_connection.php");
$uid=$_GET['id'];
$sql=mysql_query("SELECT * FROM user_information WHERE `user_id`='$uid'");
$row=mysql_fetch_array($sql);
?>


<div id="main-content" class="container-fluid">
        <div class="container">
        <div class="col-md-8 col-md-offset-2" >
        <div class="panel panel-default" >
        <div class="panel-heading">

        <span class="glyphicon glyphicon-user" style="margin-right:8px;"></span>Update User Information
        </div><!--//panel heading ends h-->
        <div class="panel-body">
        <form action="rawphp/update_user_info.php" method="post" enctype="multipart/form-data" id="regi-form">
          <div class="form-group">
          <input type="hidden" name="uid" value="<?PHP echo $uid;?>"/>
                    <label>Full Name</label>
          <input type="text" class="form-control" name="fname" value="<?PHP echo $row['full_name'];?>" id="full-name"/>
                              <span class="error-msg"></span>

          </div>

            <div class="form-group">
          <label>Student Roll</label>
          <input type="text" class="form-control" value="<?php echo $row['roll'];?>" name="studentRoll" id="full-name"/>
          <span class="error-msg"></span>
          </div>
           <div class="form-group">
          <label>Class</label>
          <input type="text" class="form-control" name="class" value="<?php echo $row['class'];?>" id="full-name"/>
          <span class="error-msg"></span>
          </div>
           <div class="form-group">
          <label>Batch</label>
           <input type="text" class="form-control" name="batch" value="<?php echo $row['batch'];?>" id="full-name"/>
          <span class="error-msg"></span>
          </div>
           <div class="form-group">
          <label>Session</label>
          <input type="text" class="form-control" name="session" value="<?php echo $row['session'];?>" id="full-name"/>
          <span class="error-msg"></span>
          </div>
          <div class="form-group">
          <label>User Name</label>
          <input type="text" class="form-control" name="username" value="<?PHP echo $row['user_name'];?>" id="user-name"/>
                              <span class="error-msg"></span>

          </div>

          <div class="form-group">
          <label>Email</label>
          <input type="text" class="form-control" name="email" value="<?PHP echo $row['email'];?>" id="email"/>
                              <span class="error-msg"></span>

          </div>

          <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" name="password" value="<?PHP echo $row['password'];?>" id="password1"/>
                              <span class="error-msg"></span>

          </div>
          <div class="form-group">
          <label>Confirm Password</label>
          <input type="password" class="form-control"  value="<?PHP echo $row['password'];?>" id="password2"/>
                              <span class="error-msg"></span>

          </div>
			 <div class="form-group">
             <input type="hidden" name="oldimage" value="<?php echo $row['avatar']; ?>"/>
          <label>Personal Image</label>
          <input type="file" class="form-control" name="userimage"/>
          <span><img src="<?PHP echo $row['avatar'];?>" alt="" style="" class="tini-image"/></span>
          </div>
<div class="form-group">
<button type="reset" class="btn btn-success">Reset</button>          
<button type="submit" class="btn btn-success">Submit</button>          </div>
        </form>
        </div><!--/////////Panel body ends here-->
      </div><!--panel ends here-->
        </div>
        <!--col-md-6-->
        
        </div>
</div><!--/////////MAIN CONTENT HOLDER ENDS HERE////////-->
<?PHP include_once("footer.php");?>