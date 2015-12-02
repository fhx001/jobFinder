<!-- Show the details of the job -->
<!-- manerger modify the job, user apply the job -->
<!DOCTYPE HTML>
{include 'head.tpl' title='register'}
	<div id="content">
	    <div id="leftColumn">
			<div id="searchBox">
			  <h1 id="findJob">{$job['Job_title']}</h1>
			  <br/>
			  <br/>
			  <form action="register_action.php" Method="POST" enctype="multipart/form-data">
				  <table id="moreLatestJobsTable">
					<tr><td class="registerForm">Employer: </td><td class="registerForm">{$job['Employer_name']}</td></tr>
					<tr><td class="registerForm">Location:</td><td class="registerForm">{$job['Job_location']}</td></tr>
					<tr><td class="registerForm">Salary: </td><td class="registerForm">{$job['Job_salary']}</td></tr>
					<tr><td class="registerForm">Job Type</td><td class="registerForm">{$job_type}</td></tr>
					<tr><td class="registerForm">Start Date</td><td class="registerForm">{$job['start_date']}</td></tr>
					<tr><td class="registerForm">End Date</td><td class="registerForm">{date("Y-m-d",$job['end_date'])}</td></tr>
					<tr><td class="registerForm">Left Days</td><td class="registerForm">{$left_days}</td></tr>
					<tr><td class="registerForm">Description</td><td class="registerForm">{$job['Job_description']}</td></tr>
					{if $manager_flag}
						<tr><td><a href="delete_job_action.php?id={$job.Job_id}"><input type="button" class="button" value="Delete this job."></a></td>
						<td><a href="update_job.php?id={$job.Job_id}"><input type="button" class="button" value="Update this job."></a></td></tr>
					{else}
					   {if $appliedFlag==0}
					     <tr><td></td><td><input id="applyTheJob" type="button" class="button" value="Apply this job."></td></tr>
					   {else}
					     <tr><td></td><td class="registerForm" style="font-weight:bold;">You Have Applied This Job</td></tr>
					   {/if}
					{/if}
				</table>
			  </form>
			</div>
			{if $manager_flag}
				<div id="latestJobs">
				   <div class="colorfulTableHeades">Applicants</div>
				   <table class="colorfulTable">
				     <tr><th style="background:yellow;">Name</th><th style="background:yellow;">Email</th><th style="background:yellow;">Time</th></tr>
				     {foreach $applicants as $applicant}
					   {if $applicant@index is even}
					       <tr><td class="datacellone"><a href="user_detail.php?id={$applicant[1]}">{$applicant[3]} &nbsp; {$applicant[4]}</a></td><td class="datacellone">{$applicant[2]} </td><td class="datacellone">{date("F j, Y",$applicant[0])} </td></tr>
					   {else}
						    <tr><td class="datacelltwo"><a href="user_detail.php?id={$applicant[1]}">{$applicant[3]} &nbsp; {$applicant[4]}</a></td><td class="datacelltwo">{$applicant[2]} </td><td class="datacelltwo">{date("F j, Y",$applicant[0])} </td></tr>
					   {/if}
					 {/foreach}
				   </table>
				</div>
			{/if}
			<div id="applicationLetter" style="padding-top:15px;display:none;padding-left:15px;" class="redContainer">
			  <h1 class="darkRedTitle">Application Letter</h1>
			  <br/>
			  <form action="apply_action.php" onsubmit="return applyShouldLogin({$user_name})" Method="POST">
			    <textarea rows="8", cols="61" name="letter"></textarea>
				<input type="hidden" name="job_title" value="{$job['Job_title']}">
				<input type="hidden" name="job_id" value="{$job['Job_id']}">
				<br/>
				<br/>
				<input type="submit" class="button" value="&nbsp; Configure Apply &nbsp;">
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
