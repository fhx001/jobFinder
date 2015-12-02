<!-- For the login part on each page -->
		<div id="loginDialogDiv"></div>
		<div id="login">
		  {if !$user_name}
			<div id="employers">
				<h1>Employers - <span style="color:red;">Post Job</span></h1>
				<h1>Finders - <span style="color:red;">Apply Job</span></h1>
			</div>
			<div id="signIn">
				<a href="register.php"><span style="font-size:20px;">Register</span></a> 
				<span style="color:white;font-size:15px;">&nbsp; Or</span> &nbsp; &nbsp; 
				<input class="button" type="button" onclick="login()" value="&nbsp; Login &nbsp;"/>
			</div>
		  {else}
		    <div id="logout">
			    <a href="logout.php"><span style="font-size:20px;">Logout</span></a> 
				<span style="color:white;font-size:15px;">&nbsp; Or</span> &nbsp; &nbsp; 
				<input class="button" type="button" onclick="updatePassword()" value="&nbsp; UpdatePassword &nbsp;"/>
			</div>
		  {/if}
		</div>