<!-- Home Page For Unregistered User And Regular user -->
<!DOCTYPE HTML>
{include 'head.tpl' title='IndeedJobs'}
	<div id="content">
	    <div id="leftColumn">
			<div id="searchBox">
			  <h1 id="findJob">FIND JOB</h1>
			  <form action="searchJob.php" Method="GET">
				<div class="leftBlock">
				  <h3>Category</h3>
				  <select id="searchCategory" name="category">
					<option value="All Categories">All Categories</option>
					<option value="Education">Education</option>
					<option value="Government">Government</option>
					<option value="Technology">Technology</option>
					<option value="Mining">Mining</option>
					<option value="Retail">Retail</option>
				  </select>
				</div>
				
				<div class="rightBlock">
				  <h3>Keywords</h3>
				  <input name="keywords" type="text" id="searchKeywords">
				</div>
					<div class="leftBlock">
				  <br/>
				  <h3>Type Of Jobs</h3>
				  <div id="searccJobType">
					<div class="searchTypeLeft">
					  <input  type="checkbox" checked="checked" name="jobType1" value="1">Parttime<br/>
					  <input  type="checkbox" checked="checked" name="jobType2" value="2">Fulltime<br/>
					  <input  type="checkbox" checked="checked" name="jobType3" value="3">Casual<br/>
					  <br/>
					  <input class="button" type="submit" value="Search"/>
					</div>
					<div class="searchTypeRight">
					  <input type="checkbox" checked="checked" name="jobType4" value="4">Contract<br/>
					  <input type="checkbox" checked="checked" name="jobType5" value="5">Work From Home<br/>
					</div>
				  </div>
				</div>
				<div class="rightBlock">
				  <br/>
				  <h3>Location</h3>
				  <select id="searchLocation" name="location">
					<option value="All Locations">All Locations</option>
					<option value="Brisbane">Brisbane</option>
					<option value="Gold Coast">Gold Coast</option>
					<option value="Beijing">Beijing</option>
					<option value="Sydney">Sydney</option>
				  </select>
				</div>
			  </form>
			</div>

			
			<div id="latestJobs">
			  <div id="latestJobsHead">Latest Jobs</div>
			  <table id="latestJobsTable">
			    {foreach $recent_5_jobs as $job}
				  {if $job@index is even}
				    {if $job@index is even}
					      <tr><td class="datacellone"><a href="job_detail.php?id={$job['Job_id']}">{$job['Job_title']}</a></td><td class="datacellone">{$job['Job_location']}</td><td class="datacellone">${$job['Job_salary']} per year</td></tr>
					   {else}
					      <tr><td class="datacelltwo"><a href="job_detail.php?id={$job['Job_id']}">{$job['Job_title']}</a></td><td class="datacelltwo">{$job['Job_location']}</td><td class="datacelltwo">${$job['Job_salary']} per year</td></tr>
					   {/if}
				  {else}
				  {/if}
				{/foreach}
			  </table>
			  <table id="moreLatestJobsTable" style="display:none;">
			    {foreach $recent_10_jobs as $job}
				  {if $job@index is even}
				    {if $job@index is even}
					      <tr><td class="datacellone"><a href="job_detail.php?id={$job['Job_id']}">{$job['Job_title']}</a></td><td class="datacellone">{$job['Job_location']}</td><td class="datacellone">${$job['Job_salary']} per year</td></tr>
					   {else}
					      <tr><td class="datacelltwo"><a href="job_detail.php?id={$job['Job_id']}">{$job['Job_title']}</a></td><td class="datacelltwo">{$job['Job_location']}</td><td class="datacelltwo">${$job['Job_salary']} per year</td></tr>
					   {/if}
				  {else}
				  {/if}
				{/foreach}
			  </table>
			  <a id="viewMoreLatestJobs">View More Latest Jobs</a>
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
</html>
