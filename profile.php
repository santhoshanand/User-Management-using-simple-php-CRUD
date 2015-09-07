<?PHP 


include_once("header.php");
include_once("rawphp/db_connection.php");
$uid=$_SESSION['user_id'];
$sql=mysql_query("SELECT * FROM user_information WHERE `user_id`='$uid'");
$row=mysql_fetch_array($sql);
?>


<div id="main-content" class="container-fluid">
        <div class="container">
        <div class="panel panel-default" style="width:60%;margin:0 auto;margin-top:50px;">
        <div class="panel-heading">

        <span class="fa fa-user" style="margin-right:8px;"></span>Personal Information
        </div><!--//panel heading ends h-->
        <div class="panel-body">
        <div class="col-md-3" style="float:left" >
    <img src="<?PHP echo $row['avatar'];?>" class="profile-image" alt=""/>
    </div><div style="float:right;" class="col-md-8">
    	<h3>Full Name: <?PHP echo $row['full_name'];?></h3>
        <h4>Batch: <?PHP echo $row['batch'];?></h4>
         <h4>Class: <?PHP echo $row['class'];?></h4>
        <h4>Roll: <?PHP echo $row['roll'];?></h4>
        <h4>Session: <?PHP echo $row['session'];?></h4>
        </div>

        </div><!--/////////Panel body ends here-->
         <div class="panel-footer">
        <span class="pull-right"><button id="password-change-loader" class="btn btn-default btn-sm" data-toggle="modal"  data-target="#change-pswd-Modal">Change password</button></span><div class="clearfix"></div>
        </div>
        
      </div><!--panel ends here-->
        
          
                 <!--/////////////////////////////Forget Password MODAL GOES HERE-->
   <div class="modal fade" class="modal fade" id="change-pswd-Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><i class="fa fa-user" style="margin-right:10px;"></i> Change Password</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-success" id="comment-msg-bar" style="display:none;">
	   					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
								<strong id="">A Mail Has been Sent with user name and password.</strong>
					</div>
            		<form action="rawphp/change_password.php" method="post" id="change-pswd-form">
                    			<div class="form-group">
                                    <label>User Name</label>
                                    <input type="text" class="form-control" name="username" id="user-name"/>
                                                        <span class="error-msg"></span>

                                    
         				   </div>
                           
                           <div class="form-group">
                           <label>Current Password</label>
                           <input type="password" name="oldpswd" class="form-control" id="old-pswd"/> 
                                               <span class="error-msg"></span>
       
         				   </div>
                           <div class="form-group">
                           <label>New Password</label>
                           <input type="password" name="newpswd" class="form-control" id="password1"/> 
                                               <span class="error-msg"></span>
       
         				   </div>
                           <div class="form-group">
                           <label>Retype New Password</label>
                           <input type="password"  class="form-control" id="password2"/> 
                                               <span class="error-msg"></span>
       
         				   </div>                                                                      
        
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="update-committee-btn">Save changes</button>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
    <!--///////////////////////////// Forget Password  MODAL ENDS HERE-->
              
        </div>
</div><!--/////////MAIN CONTENT HOLDER ENDS HERE////////-->
<?PHP include_once("footer.php");?>