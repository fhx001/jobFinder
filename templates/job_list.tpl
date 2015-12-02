<!-- Show the jobs, all or founded by user's search information -->
<!DOCTYPE HTML>
{include 'head.tpl' title='job_list'}
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
				<div id="loginForm"></div>
				
				<div class="rightBlock">
				  <h3>Keywords</h3>
				  <input name="keywords" value="{$keywords}" type="text" id="searchKeywords">
				</div>
					<div class="leftBlock">
				  <br/>
				  <h3>Type Of Jobs</h3>
				  <div id="searccJobType">
					<div class="searchTypeLeft">
					  {if $jobType1}
						<input  type="checkbox" name="jobType1" checked="checked" value="1">Parttime<br/>
					  {else}
						<input  type="checkbox" name="jobType1" value="1">Parttime<br/>
					  {/if}
					  {if $jobType2}
						<input  type="checkbox" name="jobType2" checked="checked" value="2">Fulltime<br/>
					  {else}
						<input  type="checkbox" name="jobType2" value="2">Fulltime<br/>
					  {/if}
					  {if $jobType3}
						<input  type="checkbox" name="jobType3" checked="checked" value="3">Casual<br/>
					  {else}				   
						<input  type="checkbox" name="jobType3" value="3">Casual<br/>
					  {/if}
					  <br/>
					  <input class="button" type="submit" value="Search"/>
					</div>
					<div class="searchTypeRight">
					  {if $jobType4}
						<input type="checkbox" name="jobType4" checked="checked" value="4">Contact<br/>
					  {else}				   
						<input type="checkbox" name="jobType4" value="4">Contact<br/>
					  {/if}
					  {if $jobType5}
						<input type="checkbox" name="jobType5" checked="checked" value="5">Work From Home<br/>
					  {else}				   
						<input type="checkbox" name="jobType5" value="5">Work From Home<br/>
					  {/if}
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
			  <div id="latestJobsHead">Searched Jobs</div>
			  {if $jobs}
			  <table id="latestJobsTable">
				{foreach $jobs as $job}
				  <tr><td class="datacellone"><a href="job_detail.php?id={$job['Job_id']}">{$job.Job_title}</a></td><td class="datacellone">${$job.Job_salary} per year</td></tr>
				{/foreach}
			  </table>
			  <div id="viewMoreLatestJobs">
				{if $previous > 0}
					<a href="searchJob.php?page=1&amp;category={$category}&amp;keywords={$keywords}&amp;jobType1={$jobType1}&amp;jobType2={$jobType2}&amp;jobType3={$jobType3}&amp;jobType4={$jobType4}&amp;jobType5={$jobType5}&amp;location={$location}">First</a>
				{else}
				  First
				{/if}
				{if $previous>0}
					<a href="searchJob.php?page={$previous}&amp;category={$category}&amp;keywords={$keywords}&amp;jobType1={$jobType1}&amp;jobType2={$jobType2}&amp;jobType3={$jobType3}&amp;jobType4={$jobType4}&amp;jobType5={$jobType5}&amp;location={$location}">Previous</a>
				{else}
					Previous
				{/if}
				{for $page=1 to ceil($number_of_jobs/$jobs_per_page)}
				  {if $currentPage != $page}
					<a href="searchJob.php?page={$page}&amp;category={$category}&amp;keywords={$keywords}&amp;jobType1={$jobType1}&amp;jobType2={$jobType2}&amp;jobType3={$jobType3}&amp;jobType4={$jobType4}&amp;jobType5={$jobType5}&amp;location={$location}">{$page}</a>
				  {else}
					{$page}
				  {/if}
				{/for}
				{if $next>0}
				  <a href="searchJob.php?page={$next}&amp;category={$category}&amp;keywords={$keywords}&amp;jobType1={$jobType1}&amp;jobType2={$jobType2}&amp;jobType3={$jobType3}&amp;jobType4={$jobType4}&amp;jobType5={$jobType5}&amp;location={$location}">Next</a>
				{else}
					Next
				{/if}
				{if $next>0}
					<a href="searchJob.php?page={ceil($number_of_jobs/$jobs_per_page)}&amp;category={$category}&amp;keywords={$keywords}&amp;jobType1={$jobType1}&amp;jobType2={$jobType2}&amp;jobType3={$jobType3}&amp;jobType4={$jobType4}&amp;jobType5={$jobType5}&amp;location={$location}">Last</a>
				{else}
				   Last
				{/if}
			  </div>
			  {else}
				<h3>No Jobs Found.<h3>
			  {/if}
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
