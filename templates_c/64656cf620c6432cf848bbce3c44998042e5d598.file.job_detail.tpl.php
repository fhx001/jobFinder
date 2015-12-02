<?php /* Smarty version Smarty-3.0.6, created on 2012-05-25 00:38:38
         compiled from "./templates/job_detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18514095734fbe47eeacd116-54793372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64656cf620c6432cf848bbce3c44998042e5d598' => 
    array (
      0 => './templates/job_detail.tpl',
      1 => 1337870315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18514095734fbe47eeacd116-54793372',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- Show the details of the job -->
<!-- manerger modify the job, user apply the job -->
<!DOCTYPE HTML>
<?php $_template = new Smarty_Internal_Template('head.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('title','register'); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	<div id="content">
	    <div id="leftColumn">
			<div id="searchBox">
			  <h1 id="findJob"><?php echo $_smarty_tpl->getVariable('job')->value['Job_title'];?>
</h1>
			  <br/>
			  <br/>
			  <form action="register_action.php" Method="POST" enctype="multipart/form-data">
				  <table id="moreLatestJobsTable">
					<tr><td class="registerForm">Employer: </td><td class="registerForm"><?php echo $_smarty_tpl->getVariable('job')->value['Employer_name'];?>
</td></tr>
					<tr><td class="registerForm">Location:</td><td class="registerForm"><?php echo $_smarty_tpl->getVariable('job')->value['Job_location'];?>
</td></tr>
					<tr><td class="registerForm">Salary: </td><td class="registerForm"><?php echo $_smarty_tpl->getVariable('job')->value['Job_salary'];?>
</td></tr>
					<tr><td class="registerForm">Job Type</td><td class="registerForm"><?php echo $_smarty_tpl->getVariable('job_type')->value;?>
</td></tr>
					<tr><td class="registerForm">Start Date</td><td class="registerForm"><?php echo $_smarty_tpl->getVariable('job')->value['start_date'];?>
</td></tr>
					<tr><td class="registerForm">End Date</td><td class="registerForm"><?php echo date("Y-m-d",$_smarty_tpl->getVariable('job')->value['end_date']);?>
</td></tr>
					<tr><td class="registerForm">Left Days</td><td class="registerForm"><?php echo $_smarty_tpl->getVariable('left_days')->value;?>
</td></tr>
					<tr><td class="registerForm">Description</td><td class="registerForm"><?php echo $_smarty_tpl->getVariable('job')->value['Job_description'];?>
</td></tr>
					<?php if ($_smarty_tpl->getVariable('manager_flag')->value){?>
						<tr><td><a href="delete_job_action.php?id=<?php echo $_smarty_tpl->getVariable('job')->value['Job_id'];?>
"><input type="button" class="button" value="Delete this job."></a></td>
						<td><a href="update_job.php?id=<?php echo $_smarty_tpl->getVariable('job')->value['Job_id'];?>
"><input type="button" class="button" value="Update this job."></a></td></tr>
					<?php }else{ ?>
					   <?php if ($_smarty_tpl->getVariable('appliedFlag')->value==0){?>
					     <tr><td></td><td><input id="applyTheJob" type="button" class="button" value="Apply this job."></td></tr>
					   <?php }else{ ?>
					     <tr><td></td><td class="registerForm" style="font-weight:bold;">You Have Applied This Job</td></tr>
					   <?php }?>
					<?php }?>
				</table>
			  </form>
			</div>
			<?php if ($_smarty_tpl->getVariable('manager_flag')->value){?>
				<div id="latestJobs">
				   <div class="colorfulTableHeades">Applicants</div>
				   <table class="colorfulTable">
				     <tr><th style="background:yellow;">Name</th><th style="background:yellow;">Email</th><th style="background:yellow;">Time</th></tr>
				     <?php  $_smarty_tpl->tpl_vars['applicant'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('applicants')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['applicant']->index=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['applicant']->key => $_smarty_tpl->tpl_vars['applicant']->value){
 $_smarty_tpl->tpl_vars['applicant']->index++;
?>
					   <?php if (!(1 & $_smarty_tpl->tpl_vars['applicant']->index)){?>
					       <tr><td class="datacellone"><a href="user_detail.php?id=<?php echo $_smarty_tpl->tpl_vars['applicant']->value[1];?>
"><?php echo $_smarty_tpl->tpl_vars['applicant']->value[3];?>
 &nbsp; <?php echo $_smarty_tpl->tpl_vars['applicant']->value[4];?>
</a></td><td class="datacellone"><?php echo $_smarty_tpl->tpl_vars['applicant']->value[2];?>
 </td><td class="datacellone"><?php echo date("F j, Y",$_smarty_tpl->tpl_vars['applicant']->value[0]);?>
 </td></tr>
					   <?php }else{ ?>
						    <tr><td class="datacelltwo"><a href="user_detail.php?id=<?php echo $_smarty_tpl->tpl_vars['applicant']->value[1];?>
"><?php echo $_smarty_tpl->tpl_vars['applicant']->value[3];?>
 &nbsp; <?php echo $_smarty_tpl->tpl_vars['applicant']->value[4];?>
</a></td><td class="datacelltwo"><?php echo $_smarty_tpl->tpl_vars['applicant']->value[2];?>
 </td><td class="datacelltwo"><?php echo date("F j, Y",$_smarty_tpl->tpl_vars['applicant']->value[0]);?>
 </td></tr>
					   <?php }?>
					 <?php }} ?>
				   </table>
				</div>
			<?php }?>
			<div id="applicationLetter" style="padding-top:15px;display:none;padding-left:15px;" class="redContainer">
			  <h1 class="darkRedTitle">Application Letter</h1>
			  <br/>
			  <form action="apply_action.php" onsubmit="return applyShouldLogin(<?php echo $_smarty_tpl->getVariable('user_name')->value;?>
)" Method="POST">
			    <textarea rows="8", cols="61" name="letter"></textarea>
				<input type="hidden" name="job_title" value="<?php echo $_smarty_tpl->getVariable('job')->value['Job_title'];?>
">
				<input type="hidden" name="job_id" value="<?php echo $_smarty_tpl->getVariable('job')->value['Job_id'];?>
">
				<br/>
				<br/>
				<input type="submit" class="button" value="&nbsp; Configure Apply &nbsp;">
			  </form>
			</div>
		</div>
		<div id="rightColumn">
		  <?php $_template = new Smarty_Internal_Template('loginBig.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		  <img src="images/job-search.jpg" id="advertisementRegister" alt=""/>	
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
