<?php /* Smarty version Smarty-3.0.6, created on 2012-05-25 14:13:48
         compiled from "./templates/addJob.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7886318544fbf06fca921d6-67000567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19d60a56642c6e8963919aa5b53825f0a8d3472a' => 
    array (
      0 => './templates/addJob.tpl',
      1 => 1337919227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7886318544fbf06fca921d6-67000567',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- Add a JOb -->
<!DOCTYPE HTML>
<?php $_template = new Smarty_Internal_Template('head.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('title','register'); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
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
				<input type="hidden" value=<?php echo $_smarty_tpl->getVariable('employer_id')->value;?>
 name="employer_id">
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
