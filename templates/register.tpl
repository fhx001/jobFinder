<!-- Register to be a memer -->
<!DOCTYPE HTML>
{include 'head.tpl' title='register'}
	<div id="content">
	    <div id="leftColumn">
			<div id="searchBox">
			  <h1 id="findJob">Regist To Be A Member</h1>
			  <br/>
			  <br/>
			  <form action="register_action.php" Method="POST" onSubmit="return inputValidation()" enctype="multipart/form-data">
				  <table id="moreLatestJobsTable">
					<tr><td class="registerForm">First Name *</td><td class="registerForm"><input type="text"  size="35" id="first_name" name="first_name" /></td></tr>
					<tr><td class="registerForm">Last Name *</td><td class="registerForm"><input type="text"  size="35" id="last_name"  name="last_name" /></td></tr>
					<tr><td class="registerForm">Password *</td><td class="registerForm"><input type="password" size="35" id="password"  name="password"></td></tr>
					<tr><td class="registerForm">Repeat Password *</td><td class="registerForm"><input type="password" size="35" id="repeat_password"  name="repeat_password"></td></tr>
					<tr><td class="registerForm">Email *</td><td class="registerForm"><input type="email" size="35" id="email"  name="email"></td></tr>
					<tr><td class="registerForm">Photo</td><td class="registerForm"><input type="hidden" name="MAX_FILE_SIZE" value="1000000"><input type="file" name="userfile"></td></tr>
					<tr><td class="registerForm">PhoneNumber</td><td class="registerForm"><input type="text" size="35" name="phone_number"></td></tr>
					<tr><td class="registerForm">Description</td><td class="registerForm"><textarea rows="4" cols="28" name="description"></textarea></td></tr>
					<tr><td class="registerForm"></td><td class="button"><input class="button" type="reset" value="Reset">&nbsp; &nbsp;<input class="button" type="submit" value="Submit"></td></tr>
				</table>
			  </form>
			</div>
		</div>
		<div id="rightColumn">
		  {include 'loginBig.tpl'}
		  <img src="images/job-search.jpg" id="advertisementRegister" alt=""/>	
		  {include 'showCategories.tpl'}		
		</div>
		
		
		{include 'externalLink.tpl'}
	</div>
	{include 'foot.tpl'}
</body>
</html>
