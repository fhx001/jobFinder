<?php /* Smarty version Smarty-3.0.6, created on 2012-05-25 14:12:41
         compiled from "./templates/update_job.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12814761864fbf06b9d5dfc5-83518423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e7fb389ea716b0c070126259f4e72848a70cefd' => 
    array (
      0 => './templates/update_job.tpl',
      1 => 1337919159,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12814761864fbf06b9d5dfc5-83518423',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- Update A Job For The Manager -->
<!DOCTYPE HTML>
<?php $_template = new Smarty_Internal_Template('head.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('title','register'); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	<div id="content">
	    <div id="leftColumn">
			<div id="searchBox">
			  <h1 id="findJob">Update The Job</h1>
			  <br/>
			  <br/>
			  <form action="update_job_action.php" onsubmit="return postJobValidation()" Method="POST">
				  <table id="moreLatestJobsTable">
					<tr><td class="registerForm">Job Title *</td><td class="registerForm"><input type="text"  size="35" id="job_title" name="job_title" value="<?php echo $_smarty_tpl->getVariable('job')->value['Job_title'];?>
"/></td></tr>
					<tr><td class="registerForm">Salary </td><td class="registerForm"><input type="text"  size="35" name="salary" id="salary" value="<?php echo $_smarty_tpl->getVariable('job')->value['Job_salary'];?>
"/></td></tr>
					<tr><td class="registerForm">Start Date *</td><td class="registerForm"><input type="text" size="35" id="start_date" name="start_date" value="<?php echo $_smarty_tpl->getVariable('job')->value['start_date'];?>
"></td><td class="registerForm">YYYY-MM-DD</td></tr>
					<tr><td class="registerForm">End Date *</td><td class="registerForm"><input type="text" size="35" name="end_date" id="end_date" value="<?php echo date("Y-m-d",$_smarty_tpl->getVariable('job')->value['end_date']);?>
"></td><td class="registerForm">YYYY-MM-DD</td></tr>
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
					<tr><td class="registerForm">Description</td><td class="registerForm"><textarea rows="4" cols="28.7" name="description"><?php echo $_smarty_tpl->getVariable('job')->value['Job_description'];?>
</textarea></td></tr>
					<tr><td class="registerForm"></td><td>&nbsp; &nbsp;<input class="button" type="submit" value="&nbsp; Update &nbsp;"></td></tr>
				</table>
				<input type="hidden" value=<?php echo $_smarty_tpl->getVariable('employer_id')->value;?>
 name="employer_id">
				<input type="hidden" value=<?php echo $_smarty_tpl->getVariable('job')->value['Job_id'];?>
 name="id">
			  </form>
			</div>
		</div>
		<div id="rightColumn">
		  <?php $_template = new Smarty_Internal_Template('loginBig.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		  <img src="images/job-search.jpg" id="advertisementRegister"/>	
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
