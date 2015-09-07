<?PHP include_once("header.php");?>

<div id="main-content" class="container-fluid">
        <div class="container">
        <div class="panel panel-default" style="width:60%;margin:0 auto;">
        <div class="panel-heading">

        <span class="fa fa-users" style="margin-right:8px;"></span>Add New User
        </div><!--//panel heading ends h-->
        <div class="panel-body">
        <form action="rawphp/registration.php" method="post" enctype="multipart/form-data" id="regi-form">
        
          <div class="form-group">
          <label>Full Name</label>
          <input type="text" class="form-control" name="fname" id="full-name"/>
          <span class="error-msg"></span>
          </div>
           <div class="form-group">
          <label>Student Roll</label>
          <input type="text" class="form-control" name="studentRoll" id="full-name"/>
          <span class="error-msg"></span>
          </div>
           <div class="form-group">
          <label>Class</label>
          <input type="text" class="form-control" name="class" id="full-name"/>
          <span class="error-msg"></span>
          </div>
           <div class="form-group">
          <label>Batch</label>
          <input type="text" class="form-control" name="batch" id="full-name"/>
          <span class="error-msg"></span>
          </div>
           <div class="form-group">
          <label>Session</label>
          <input type="text" class="form-control" name="session" id="full-name"/>
          <span class="error-msg"></span>
          </div>
          <div class="form-group">
          <label>User Name</label>
          <input type="text" class="form-control" autocomplete="off" name="username" id="user-name"/>
                    <span class="error-msg"></span>

          </div>

          <div class="form-group">
          <label>Email</label>
          <input type="text" class="form-control" name="email" id="email"/>
                    <span class="error-msg"></span>

          </div>

          <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" name="password" autocomplete="off" id="password1"/>
                    <span class="error-msg"></span>

          </div>
          <div class="form-group">
          <label>Confirm Password</label>
          <input type="password" class="form-control" id="password2" />
                    <span class="error-msg"></span>

          </div>
		 <div class="form-group">
          <label>Personal Image</label>
          <input type="file" class="form-control" name="userimage"/>
          </div>
<div class="form-group">
<button type="reset" class="btn btn-success">Reset</button>          
<button type="submit" class="btn btn-success"> Submit</button> </div>
        </form>
        </div><!--/////////Panel body ends here-->
      </div><!--panel ends here-->
        
        
        </div>
</div><!--/////////MAIN CONTENT HOLDER ENDS HERE////////-->
<?PHP include_once("footer.php");?>