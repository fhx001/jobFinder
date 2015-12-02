<!-- User's Detail Page for the employer to check applicants -->
<!DOCTYPE HTML>
{include 'head.tpl' title='register'}
	<div id="content">
	    <div id="leftColumn">
			<div id="searchBox">
			  <h1 id="findJob">Applicant</h1>
			  <br/>
			  <br/>
			  <table id="moreLatestJobsTable">
				<tr><td class="registerForm">First Name: </td><td class="registerForm">{$applicant['first_name']}</td></tr>
				<tr><td class="registerForm">Last Name: </td><td class="registerForm">{$applicant['last_name']}</td></tr>
				<tr><td class="registerForm">Email: </td><td class="registerForm">{$applicant['email']}</td></tr>
				<tr><td class="registerForm">Phone: </td><td class="registerForm">{$applicant['phone_number']}</td></tr>
				<tr></tr>
				<tr><td class="registerForm">Photo: </td><td><img src="getImage.php?id={$applicant['user_id']}" width="120" height="120" alt="photo"/></td></tr>
			  </table>
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
