<!-- Home Page For Unregistered User And Regular user -->
<!DOCTYPE HTML>
{include 'head.tpl' title='admin'}
	<div id="content">
	    <div id="leftColumn">
			<div id="searchBox">
			  <h1 id="findJob">Asign A Manager</h1>
			  <div style="margin:20px">
			  <form action="admin_action.php" Method="POST" onsubmit="return inputValidate()">
			    <p style="font-size:20px;">User Email: </p><input type="email" name="email" id="email"/> <br/>
				<p style="font-size:20px;">Employer Name: </p><input type="text" name="employer_name" id="employer_name"/> <br/> <br/>
				<input type="submit" value="Asign"/>
				<br/>
				<br/>
			  </form>
			  </div>
			</div>
		</div>
		<div id="rightColumn">
		    {include 'loginBig.tpl'}
			<img src="images/job-search.jpg" id="advertisement" alt=""/>
			{include 'showCategories.tpl'}		
		</div>
		
			
		
		{include 'externalLink.tpl'}
	</div>
	{include 'foot.tpl'}
</body>

<script type="text/javascript">
  function inputValidate(){
    if($("#email").val()==""){
	  alert("Where is the email ?");
	  return false;
	}
    if($("#employer_name").val()==""){
	  alert("Where is the employer name ?");
	  return false;
	}
	else return true;
  }
</script>
</html>
