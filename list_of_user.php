<?PHP include_once("header.php");?>

<div id="main-content" class="container-fluid">
        <div class="container">
        
        <div class="panel panel-default" style="width:80%;margin:0 auto;margin-top:20px;">
        <div class="panel-heading">

        <span class="fa  fa-users" style="margin-right:8px;"></span>List of User
        </div><!--//panel heading ends h-->
        <div class="panel-body ">
        <?PHP 
		if(isset($_GET['delete'])){
		?>
        
                    		  <center>  <div class="alert alert-success" id="comment-msg-bar" style="display:block;">
	   					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
								<strong id="">User has been deleted Succeessfully, Thank You.</strong>
					</div></center>
        <?PHP }?>
       <table width="687" height="" border="1" class="table table-striped table-bordered">
  <tr>
    <th>SL</th>
        <th>Avatar</th>

    <th>Full Name</th>
    <th>User Name</th>
    <th>Email</th>
    <th>Action</th>
  </tr>
  <tr>
  <?PHP 
  include_once("rawphp/db_connection.php");
  $sql=mysql_query("SELECT * FROM user_information");
  $i=1;
  while($row=mysql_fetch_array($sql)){
	  
  ?>
  
    <td><?PHP echo $i++;?></td>
        <td><img src="<?PHP echo $row['avatar'];?>" alt="" class="tini-image"/></td>

    <td><?PHP echo $row['full_name'];?></td>
    <td><?PHP echo $row['user_name'];?></td>
    <td><?PHP echo $row['email'];?></td>
    <td><a href="user_update_form.php?id=<?PHP echo $row['user_id'];?>" class="btn btn-sm btn-primary"><i class="fa fa-edit" style="margin-right:5px;"></i>Edit</a><a href="rawphp/delete_user.php?id=<?PHP echo $row['user_id'];?>" class="btn btn-sm btn-danger" style="margin-left:5px;"><i class="fa fa-trash-o" style="margin-right:5px;"></i>Delete</a></td>
  </tr>
 <?PHP }?>
</table>
        </div><!--/////////Panel body ends here-->
      </div><!--panel ends here-->
                
        </div>
</div><!--/////////MAIN CONTENT HOLDER ENDS HERE////////-->
<?PHP include_once("footer.php");?>