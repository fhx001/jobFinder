<?php /* Smarty version Smarty-3.0.6, created on 2012-05-25 00:38:43
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20897405944fbe47f33f0088-15460211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1337870315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20897405944fbe47f33f0088-15460211',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- Home Page For Unregistered User And Regular user -->
<!DOCTYPE HTML>
<?php $_template = new Smarty_Internal_Template('head.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('title','IndeedJobs'); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
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
			    <?php  $_smarty_tpl->tpl_vars['job'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('recent_5_jobs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['job']->index=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['job']->key => $_smarty_tpl->tpl_vars['job']->value){
 $_smarty_tpl->tpl_vars['job']->index++;
?>
				  <?php if (!(1 & $_smarty_tpl->tpl_vars['job']->index)){?>
				    <?php if (!(1 & $_smarty_tpl->tpl_vars['job']->index)){?>
					      <tr><td class="datacellone"><a href="job_detail.php?id=<?php echo $_smarty_tpl->tpl_vars['job']->value['Job_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['job']->value['Job_title'];?>
</a></td><td class="datacellone"><?php echo $_smarty_tpl->tpl_vars['job']->value['Job_location'];?>
</td><td class="datacellone">$<?php echo $_smarty_tpl->tpl_vars['job']->value['Job_salary'];?>
 per year</td></tr>
					   <?php }else{ ?>
					      <tr><td class="datacelltwo"><a href="job_detail.php?id=<?php echo $_smarty_tpl->tpl_vars['job']->value['Job_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['job']->value['Job_title'];?>
</a></td><td class="datacelltwo"><?php echo $_smarty_tpl->tpl_vars['job']->value['Job_location'];?>
</td><td class="datacelltwo">$<?php echo $_smarty_tpl->tpl_vars['job']->value['Job_salary'];?>
 per year</td></tr>
					   <?php }?>
				  <?php }else{ ?>
				  <?php }?>
				<?php }} ?>
			  </table>
			  <table id="moreLatestJobsTable" style="display:none;">
			    <?php  $_smarty_tpl->tpl_vars['job'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('recent_10_jobs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['job']->index=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['job']->key => $_smarty_tpl->tpl_vars['job']->value){
 $_smarty_tpl->tpl_vars['job']->index++;
?>
				  <?php if (!(1 & $_smarty_tpl->tpl_vars['job']->index)){?>
				    <?php if (!(1 & $_smarty_tpl->tpl_vars['job']->index)){?>
					      <tr><td class="datacellone"><a href="job_detail.php?id=<?php echo $_smarty_tpl->tpl_vars['job']->value['Job_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['job']->value['Job_title'];?>
</a></td><td class="datacellone"><?php echo $_smarty_tpl->tpl_vars['job']->value['Job_location'];?>
</td><td class="datacellone">$<?php echo $_smarty_tpl->tpl_vars['job']->value['Job_salary'];?>
 per year</td></tr>
					   <?php }else{ ?>
					      <tr><td class="datacelltwo"><a href="job_detail.php?id=<?php echo $_smarty_tpl->tpl_vars['job']->value['Job_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['job']->value['Job_title'];?>
</a></td><td class="datacelltwo"><?php echo $_smarty_tpl->tpl_vars['job']->value['Job_location'];?>
</td><td class="datacelltwo">$<?php echo $_smarty_tpl->tpl_vars['job']->value['Job_salary'];?>
 per year</td></tr>
					   <?php }?>
				  <?php }else{ ?>
				  <?php }?>
				<?php }} ?>
			  </table>
			  <a id="viewMoreLatestJobs">View More Latest Jobs</a>
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
