<?php /* Smarty version Smarty-3.0.6, created on 2012-05-25 00:38:45
         compiled from "./templates/job_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8965930404fbe47f5571d77-58086196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9934c1c3288a965ea6fc20e549e14c04cf6ec52a' => 
    array (
      0 => './templates/job_list.tpl',
      1 => 1337870315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8965930404fbe47f5571d77-58086196',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- Show the jobs, all or founded by user's search information -->
<!DOCTYPE HTML>
<?php $_template = new Smarty_Internal_Template('head.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('title','job_list'); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
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
				  <input name="keywords" value="<?php echo $_smarty_tpl->getVariable('keywords')->value;?>
" type="text" id="searchKeywords">
				</div>
					<div class="leftBlock">
				  <br/>
				  <h3>Type Of Jobs</h3>
				  <div id="searccJobType">
					<div class="searchTypeLeft">
					  <?php if ($_smarty_tpl->getVariable('jobType1')->value){?>
						<input  type="checkbox" name="jobType1" checked="checked" value="1">Parttime<br/>
					  <?php }else{ ?>
						<input  type="checkbox" name="jobType1" value="1">Parttime<br/>
					  <?php }?>
					  <?php if ($_smarty_tpl->getVariable('jobType2')->value){?>
						<input  type="checkbox" name="jobType2" checked="checked" value="2">Fulltime<br/>
					  <?php }else{ ?>
						<input  type="checkbox" name="jobType2" value="2">Fulltime<br/>
					  <?php }?>
					  <?php if ($_smarty_tpl->getVariable('jobType3')->value){?>
						<input  type="checkbox" name="jobType3" checked="checked" value="3">Casual<br/>
					  <?php }else{ ?>				   
						<input  type="checkbox" name="jobType3" value="3">Casual<br/>
					  <?php }?>
					  <br/>
					  <input class="button" type="submit" value="Search"/>
					</div>
					<div class="searchTypeRight">
					  <?php if ($_smarty_tpl->getVariable('jobType4')->value){?>
						<input type="checkbox" name="jobType4" checked="checked" value="4">Contact<br/>
					  <?php }else{ ?>				   
						<input type="checkbox" name="jobType4" value="4">Contact<br/>
					  <?php }?>
					  <?php if ($_smarty_tpl->getVariable('jobType5')->value){?>
						<input type="checkbox" name="jobType5" checked="checked" value="5">Work From Home<br/>
					  <?php }else{ ?>				   
						<input type="checkbox" name="jobType5" value="5">Work From Home<br/>
					  <?php }?>
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
			  <?php if ($_smarty_tpl->getVariable('jobs')->value){?>
			  <table id="latestJobsTable">
				<?php  $_smarty_tpl->tpl_vars['job'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('jobs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['job']->key => $_smarty_tpl->tpl_vars['job']->value){
?>
				  <tr><td class="datacellone"><a href="job_detail.php?id=<?php echo $_smarty_tpl->tpl_vars['job']->value['Job_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['job']->value['Job_title'];?>
</a></td><td class="datacellone">$<?php echo $_smarty_tpl->tpl_vars['job']->value['Job_salary'];?>
 per year</td></tr>
				<?php }} ?>
			  </table>
			  <div id="viewMoreLatestJobs">
				<?php if ($_smarty_tpl->getVariable('previous')->value>0){?>
					<a href="searchJob.php?page=1&amp;category=<?php echo $_smarty_tpl->getVariable('category')->value;?>
&amp;keywords=<?php echo $_smarty_tpl->getVariable('keywords')->value;?>
&amp;jobType1=<?php echo $_smarty_tpl->getVariable('jobType1')->value;?>
&amp;jobType2=<?php echo $_smarty_tpl->getVariable('jobType2')->value;?>
&amp;jobType3=<?php echo $_smarty_tpl->getVariable('jobType3')->value;?>
&amp;jobType4=<?php echo $_smarty_tpl->getVariable('jobType4')->value;?>
&amp;jobType5=<?php echo $_smarty_tpl->getVariable('jobType5')->value;?>
&amp;location=<?php echo $_smarty_tpl->getVariable('location')->value;?>
">First</a>
				<?php }else{ ?>
				  First
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('previous')->value>0){?>
					<a href="searchJob.php?page=<?php echo $_smarty_tpl->getVariable('previous')->value;?>
&amp;category=<?php echo $_smarty_tpl->getVariable('category')->value;?>
&amp;keywords=<?php echo $_smarty_tpl->getVariable('keywords')->value;?>
&amp;jobType1=<?php echo $_smarty_tpl->getVariable('jobType1')->value;?>
&amp;jobType2=<?php echo $_smarty_tpl->getVariable('jobType2')->value;?>
&amp;jobType3=<?php echo $_smarty_tpl->getVariable('jobType3')->value;?>
&amp;jobType4=<?php echo $_smarty_tpl->getVariable('jobType4')->value;?>
&amp;jobType5=<?php echo $_smarty_tpl->getVariable('jobType5')->value;?>
&amp;location=<?php echo $_smarty_tpl->getVariable('location')->value;?>
">Previous</a>
				<?php }else{ ?>
					Previous
				<?php }?>
				<?php $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int)ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? ceil($_smarty_tpl->getVariable('number_of_jobs')->value/$_smarty_tpl->getVariable('jobs_per_page')->value)+1 - (1) : 1-(ceil($_smarty_tpl->getVariable('number_of_jobs')->value/$_smarty_tpl->getVariable('jobs_per_page')->value))+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0){
for ($_smarty_tpl->tpl_vars['page']->value = 1, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++){
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration == 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration == $_smarty_tpl->tpl_vars['page']->total;?>
				  <?php if ($_smarty_tpl->getVariable('currentPage')->value!=$_smarty_tpl->tpl_vars['page']->value){?>
					<a href="searchJob.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&amp;category=<?php echo $_smarty_tpl->getVariable('category')->value;?>
&amp;keywords=<?php echo $_smarty_tpl->getVariable('keywords')->value;?>
&amp;jobType1=<?php echo $_smarty_tpl->getVariable('jobType1')->value;?>
&amp;jobType2=<?php echo $_smarty_tpl->getVariable('jobType2')->value;?>
&amp;jobType3=<?php echo $_smarty_tpl->getVariable('jobType3')->value;?>
&amp;jobType4=<?php echo $_smarty_tpl->getVariable('jobType4')->value;?>
&amp;jobType5=<?php echo $_smarty_tpl->getVariable('jobType5')->value;?>
&amp;location=<?php echo $_smarty_tpl->getVariable('location')->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
				  <?php }else{ ?>
					<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

				  <?php }?>
				<?php }} ?>
				<?php if ($_smarty_tpl->getVariable('next')->value>0){?>
				  <a href="searchJob.php?page=<?php echo $_smarty_tpl->getVariable('next')->value;?>
&amp;category=<?php echo $_smarty_tpl->getVariable('category')->value;?>
&amp;keywords=<?php echo $_smarty_tpl->getVariable('keywords')->value;?>
&amp;jobType1=<?php echo $_smarty_tpl->getVariable('jobType1')->value;?>
&amp;jobType2=<?php echo $_smarty_tpl->getVariable('jobType2')->value;?>
&amp;jobType3=<?php echo $_smarty_tpl->getVariable('jobType3')->value;?>
&amp;jobType4=<?php echo $_smarty_tpl->getVariable('jobType4')->value;?>
&amp;jobType5=<?php echo $_smarty_tpl->getVariable('jobType5')->value;?>
&amp;location=<?php echo $_smarty_tpl->getVariable('location')->value;?>
">Next</a>
				<?php }else{ ?>
					Next
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('next')->value>0){?>
					<a href="searchJob.php?page=<?php echo ceil($_smarty_tpl->getVariable('number_of_jobs')->value/$_smarty_tpl->getVariable('jobs_per_page')->value);?>
&amp;category=<?php echo $_smarty_tpl->getVariable('category')->value;?>
&amp;keywords=<?php echo $_smarty_tpl->getVariable('keywords')->value;?>
&amp;jobType1=<?php echo $_smarty_tpl->getVariable('jobType1')->value;?>
&amp;jobType2=<?php echo $_smarty_tpl->getVariable('jobType2')->value;?>
&amp;jobType3=<?php echo $_smarty_tpl->getVariable('jobType3')->value;?>
&amp;jobType4=<?php echo $_smarty_tpl->getVariable('jobType4')->value;?>
&amp;jobType5=<?php echo $_smarty_tpl->getVariable('jobType5')->value;?>
&amp;location=<?php echo $_smarty_tpl->getVariable('location')->value;?>
">Last</a>
				<?php }else{ ?>
				   Last
				<?php }?>
			  </div>
			  <?php }else{ ?>
				<h3>No Jobs Found.<h3>
			  <?php }?>
			</div>
		</div>
		
		<div id="rightColumn">
		    <?php $_template = new Smarty_Internal_Template('loginBig.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
			<img src="images/job-search.jpg" id="advertisement" alt=""/>
			<?php $_template = new Smarty_Internal_Template('showCategories.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>	
		</div>
		<?php $_template = new Smarty_Internal_Template('externalLink.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	</div>
		<?php $_template = new Smarty_Internal_Template('foot.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</body>
</html>
