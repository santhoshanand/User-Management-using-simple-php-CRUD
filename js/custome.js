// JavaScript Document
$(document).ready(function(){
	
	/*//////////REGISTRATION FORM VALIDATION STARTS HERE///////*/
	$("#regi-form").submit(function(){
		if($.trim($("#full-name").val())==""){
			$("#full-name").next("span").html("Full Name is empty");
			$("#full-name").focus();
			return false;
			}
		else if($.trim($("#user-name").val())==""){
			$("#user-name").next("span").html("User Name is empty");
			$("#user-name").focus();
			return false;
			}
		else if($.trim($("#email").val())==""){
			$("#email").next("span").html("Email is empty");
			$("#email").focus();
			return false;
			}
	else if($.trim($("#password1").val())==""){
			$("#password1").next("span").html("Password is empty");
			$("#password1").focus();
			return false;
			}
		else if($.trim($("#password1").val())!=$.trim($("#password2").val())){
			$("#password2").next("span").html("Password did not match  empty");
			$("#password2").focus();
			return false;
			}
		});
	
	/*///////////////////////CHange password form validation starts here/////////*/
	$("#change-pswd-form").submit(function(){
		if($.trim($("#user-name").val())==""){
			$("#user-name").next("span").html("User Name is empty");
			$("#user-name").focus();
			return false;
			}
		else if($.trim($("#old-pswd").val())==""){
			$("#old-pswd").next("span").html("Current Password is empty");
			$("#old-pswd").focus();
			return false;
			}
	else if($.trim($("#password1").val())==""){
			$("#password1").next("span").html("Password is empty");
			$("#password1").focus();
			return false;
			}
		else if($.trim($("#password1").val())!=$.trim($("#password2").val())){
			$("#password2").next("span").html("Password did not match  empty");
			$("#password2").focus();
			return false;
			}
		
		});
	/*///////////////////Login form validation///////////////////*/
	$("#forget-pswd-form").submit(function(){
		if($.trim($("#user-name").val())==""){
			$("#user-name").next("span").html("User Name is empty");
			$("#user-name").focus();
			return false;
			}
		else if($.trim($("#emails").val())==""){
			$("#email").next("span").html("Email is empty");
			$("#email").focus();
			return false;
			}
		
		});
	
	});//jquery ends here