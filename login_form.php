<?PHP include_once("header.php");?>
<div id="main-content" class="container-fluid">
  <div class="container">
    <div class="panel panel-default" style="width:50%;margin:0 auto;margin-top:100px;">
      <div class="panel-heading"> <span class="fa fa-align-justify" style="margin-right:8px;"></span>Login </div>
      <!--//panel heading ends h-->
      <div class="panel-body ">
        <form action="rawphp/login.php" method="post" >
          <div class="form-group">
            <label>User Name</label>
            <input type="text" class="form-control" autocomplete="off" name="username" />
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" autocomplete="off" name="password"/>
          </div>
          <div class="form-group">
            <button type="reset" class="btn btn-success">Reset</button>
            <button type="submit" class="btn btn-success">Login</button>
          </div>
        </form>
      </div>
      <!--/////////Panel body ends here-->
      <div class="panel-footer"> <span class="pull-right">
        <button id="password-forget-loader" class="btn btn-default btn-sm" data-toggle="modal"  data-target="#forget-pswd-Modal">Forget password?</button>
        </span>
        <div class="clearfix"></div>
      </div>
    </div>
    <!--panel ends here--> 
    
    <!--/////////////////////////////Forget Password MODAL GOES HERE-->
    <div class="modal fade" class="modal fade" id="forget-pswd-Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title"><i class="fa fa-gears" style="margin-right:10px;"></i> Forget Password</h4>
        </div>
        <div class="modal-body">
   
        <form action="rawphp/forget_password.php" method="post" id="forget-pswd-form">
          <div class="form-group">
            <label>User Name</label>
            <input type="text" class="form-control" name="username" id="user-name"/>
            <span class="error-msg"></span> </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" id="emails"/>
            <span class="error-msg"></span> </div>
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" id="update-committee-btn">Save changes</button>
          </form>
        </div>
      </div>
      
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>
<!-- /.modal --> 
<!--///////////////////////////// Forget Password  MODAL ENDS HERE-->

</div>
</div>
<!--/////////MAIN CONTENT HOLDER ENDS HERE////////-->
<?PHP include_once("footer.php");?>