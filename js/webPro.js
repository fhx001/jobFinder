/* Jquery: drop down more views */
$(document).ready(function(){
  $("#viewMoreLatestJobs").click(function(){
    $("#moreLatestJobsTable").toggle('slow');
  });
  
  
  $("#viewMoreCategories").click(function(){
    $("#moreCategories").toggle('slow');
  });
  
  $("#applyTheJob").click(function(){
    $("#applicationLetter").toggle('slow');
  });
});


/* Ajax: Login Form And Send To loginAction.php */
function login(){
  $("#loginDialogDiv").dialog({
    autoOpen:false,
	modal:true,
	title:"Login",
	height:200,
	width:300,
	show:'fade',
	hide:'fade',
	open: function(){
	  $("#loginDialogDiv").load("loginForm.php");
	},
	buttons: {
	  "Login": function(){
	    $("#loginErrorMessageDiv").empty();
	    var email = $("#login_email").val();
		var password = $("#login_password").val();
		var data = "email="+email+"&password="+password;
		var error_message = "";
		if(email.length == 0) error_message += "Please enter the email <br>";
		if(password.length == 0) error_message += "Please enter the password <br>";
		if(error_message.length == 0)
			$.ajax({
			  url: "loginAction.php",
			  type:"POST",
			  cache: false,
			  data: data,
			  async:false,
			  success: function(message){
				if(message.length > 2){
				  $("#loginErrorMessageDiv").append(message);
				  $("#loginErrorMessageDiv").show();
				}
				else{
				  $("#loginDialogDiv").empty();
				  $("#loginDialogDiv").dialog("close"); 
				  location.href="index.php";
				}
			  }
			});
		else{
		  $("#loginErrorMessageDiv").append(error_message);
		  $("#loginErrorMessageDiv").show();
		}
	  },
	  "Cancel": function(){
	    $("#loginDialogDiv").empty();
	    $(this).dialog("close"); 
	  }
	}
  });
  $("#loginDialogDiv").dialog("open");
}

/* Ajax: update the password */
function updatePassword(){
  $("#loginDialogDiv").dialog({
    autoOpen:false,
	modal:true,
	title:"Update Password",
	height:200,
	width:300,
	show:'fade',
	hide:'fade',
	open: function(){
	  $("#loginDialogDiv").load("updatePassword.php");
	},
	buttons: {
	  "Update": function(){
	    $("#loginErrorMessageDiv").empty();
		var oldpassword = $("#oldpassword").val();
		var newpassword = $("#newpassword").val();
		var data = "oldpassword="+oldpassword+"&newpassword="+newpassword;
		$.ajax({
		  url: "update_password_action.php",
		  type:"POST",
		  cache: false,
		  data: data,
		  async:false,
		  success: function(message){
		    if(message.length > 2){
			  $("#loginErrorMessageDiv").append(message);
			  $("#loginErrorMessageDiv").show();
			}
			else{
			  $("#loginDialogDiv").empty();
			  $("#loginDialogDiv").dialog("close"); 
			  location.href="index.php";
			}
		  }
		});
	  },
	  "Cancel": function(){
	    $("#loginDialogDiv").empty();
	    $(this).dialog("close"); 
	  }
	}
  });
  $("#loginDialogDiv").dialog("open");
}

/*  input validate for register a new member */
function inputValidation(){
  var first_name  = document.getElementById("first_name");
  var last_name = document.getElementById("last_name");
  var password = document.getElementById("password");
  var repeat_password = document.getElementById("repeat_password");
  var email = document.getElementById("email");
  var error = "";
  if(first_name.value.length == 0){
    error += "first_name field shouldn't be empty \n";
  }
  if(last_name.value.length == 0){
    error += "last_name field shouldn't be empty \n";
  }
  if(password.value.length == 0){
    error += "password field shouldn't be empty \n";
  }
  if(email.value.length == 0){
    error += "email field should'd be empty \n";
  }
  if(repeat_password.value.length == 0){
    error += "repeat_password field should'd be empty \n";
  }
  if(password.value.length != 0 && repeat_password.value.length != 0 && password.value!=repeat_password.value){
	error += "two passwords must be same \n";
  }
	
  if(error.length != 0){
    window.alert(error);
	return false;
  }
  else 
    return true;
}

/*  input validate for post a new job */
function postJobValidation(){
  var job_title  = document.getElementById("job_title");
  var salary = document.getElementById("salary");
  var start_date = document.getElementById("start_date");
  var end_date = document.getElementById("end_date");
  var error = "";
  if(job_title.value.length == 0){
    error += "job title field shouldn't be empty \n";
  }
  if(salary.value.length == 0){
    error += "salary field shouldn't be empty \n";
  }
  if(start_date.value.length == 0){
    error += "start date field shouldn't be empty \n";
  }
  if(end_date.value.length == 0){
    error += "end date field should'd be empty \n";
  }
  if(!validateDate(start_date.value)){
    error += "start date format wrong \n";
  }
  if(!validateDate(end_date.value)){
    error += "end date format wrong \n";
  }
  if(end_date.value.length > 0 && end_date.value.length > 0 && end_date.value <= start_date.value){
    error += "end date should be latter. \n";
  }
  if(!regIsNumber(salary.value)){
    error += "salary should be a number \n";
  }
	
  if(error.length != 0){
    alert(error);
	return false;
  }
  else 
    return true;
}


/* simple validate dateformat */
function validateDate(dateEntered)
{
	if(dateEntered.match(/^[0-9]{4}\-(0[1-9]|1[012])\-(0[1-9]|[12][0-9]|3[01])/))
	{
		return true;
	}
	return false;
}

// check is number
function regIsNumber(fData)
{
    var reg = new RegExp("^[-]?[0-9]+[\.]?[0-9]+$");
    return reg.test(fData);
}

// inform the user should login if want to apply a job
function applyShouldLogin(name){
  if(name == undefined){
    alert("You should login or register.");
    return false;
  }
  else 
    return true;
  
}





