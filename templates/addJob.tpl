<!-- Add a JOb -->
<!DOCTYPE HTML>
{include 'head.tpl' title='register'}
	<div id="content">
	    <div id="leftColumn">
			<div id="searchBox">
			  <h1 id="findJob">Post A New Job</h1>
			  <br/>
			  <br/>
			  <form action="add_job_action.php" onsubmit="return postJobValidation()" Method="POST">
				  <table id="moreLatestJobsTable">
					<tr><td class="registerForm">Job Title *</td><td class="registerForm"><input type="text"  size="35" id="job_title" name="job_title" /></td></tr>
					<tr><td class="registerForm">Salary </td><td class="registerForm"><input type="text"  id="salary" size="35" name="salary" /></td></tr>
					<tr><td class="registerForm">Start Date *</td><td class="registerForm"><input type="text" size="35" id="start_date" name="start_date"></td><td class="registerForm">YYYY-MM-DD</td></tr>
					<tr><td class="registerForm">End Date *</td><td class="registerForm"><input type="text" size="35" id="end_date"  name="end_date"></td><td class="registerForm">YYYY-MM-DD</td></tr>
					<tr><td class="registerForm">Location *</td>
					    <td class="registerForm">
							<select id="searchLocation" name="location">
								<option value="Brisbane">Brisbane</option>
								<option value="Gold Coast">Gold Coast</option>
								<option value="Beijing">Beijing</option>
								<option value="Sydney">Sydney</option>
							</select>
				        </td></tr>
					<tr><td class="registerForm">Job Type *</td>
					    <td class="registerForm">
							<select id="searchLocation" name="job_type">
								<option value="1">Parttime</option>
								<option value="2">Fulltime</option>
								<option value="3">Casula</option>
								<option value="4">Contract</option>
								<option value="5">Work From Home</option>
							</select>
				        </td></tr>
					<tr><td class="registerForm">Description</td><td class="registerForm"><textarea rows="4" cols="28.7" name="description"></textarea></td></tr>
					<tr><td class="registerForm"></td><td class="button" class="registerForm"><input class="button" type="reset" value="Reset">&nbsp; &nbsp;<input class="button" type="submit" value="Submit"></td></tr>
				</table>
				<input type="hidden" value={$employer_id} name="employer_id">
			  </form>
			</div>
		</div>
		<div id="rightColumn">
		  {include 'loginBig.tpl'}
		  <img src="images/job-search.jpg" id="advertisementRegister"/>	
		  {include 'showCategories.tpl'}		
		</div>
		
		
		{include 'externalLink.tpl'}
	</div>
	{include 'foot.tpl'}
</body>
</html>
