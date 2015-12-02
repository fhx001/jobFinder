<!-- Hello -->
<!DOCTYPE HTML>
{include 'head.tpl' title='register'}
	<div id="content">
	    <div id="leftColumn">
			<div id="searchBox">
			  <h1 id="findJob">{$job['Job_title']}</h1>
			  <br/>
			  <br/>
			  <table id="moreLatestJobsTable">
				<tr><td class="registerForm">First Name: </td><td class="registerForm">{$applicant['first_name']}</td></tr>
				<tr><td class="registerForm">Last Name: </td><td class="registerForm">{$applicant['last_name']}</td></tr>
				<tr><td class="registerForm">Email: </td><td class="registerForm">{$applicant['email']}</td></tr>
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
