<?php /* Smarty version Smarty-3.0.6, created on 2012-05-25 13:08:32
         compiled from "./templates/employer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4683417614fbef7b008ee45-89174390%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3446ff03923fabb1fae171908e38d96e2e4cf7b4' => 
    array (
      0 => './templates/employer.tpl',
      1 => 1337915310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4683417614fbef7b008ee45-89174390',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- Manager home page --><!-- This page is only shown to the manager --><!DOCTYPE HTML><?php $_template = new Smarty_Internal_Template('head.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('title','IndeedJobs'); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>	<div id="content">	    <div id="leftColumn">			<div id="searchBox">			  <h1 id="findJob">POSTED JOB</h1>				<?php if ($_smarty_tpl->getVariable('jobs')->value){?>					<div id="employerPostedJobs">					   <table>						   <tr><th style="text-align: left;">Job Title</th><th style="text-align: left;">Start Date</th><th style="text-align: left;">End Date</th></tr>						   <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('jobs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>							 <tr><td><a href="job_detail.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['Job_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['Job_title'];?>
</a></td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['start_date'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['end_date'];?>
</td></tr>						   <?php }} ?>						</table>						<div id="postNewJob">						  <a href="addJob.php"><input class="button" type="button" value="&nbsp; Post New Job &nbsp;"/></a>						  <a href="searchJob.php"><input class="button" type="button" value="&nbsp; Global Search &nbsp;"/></a>						</div>						<div id="postedJobPagi">							<?php if ($_smarty_tpl->getVariable('previous')->value>0){?>								<a href="index.php?page=1">First</a>							<?php }else{ ?>							  First							<?php }?>							<?php if ($_smarty_tpl->getVariable('previous')->value>0){?>								<a href="index.php?page=<?php echo $_smarty_tpl->getVariable('previous')->value;?>
">Previous</a>							<?php }else{ ?>								Previous							<?php }?>							<?php $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int)ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? ceil($_smarty_tpl->getVariable('number_of_jobs')->value/$_smarty_tpl->getVariable('jobs_per_page')->value)+1 - (1) : 1-(ceil($_smarty_tpl->getVariable('number_of_jobs')->value/$_smarty_tpl->getVariable('jobs_per_page')->value))+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0){
for ($_smarty_tpl->tpl_vars['page']->value = 1, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++){
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration == 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration == $_smarty_tpl->tpl_vars['page']->total;?>							  <?php if ($_smarty_tpl->getVariable('currentPage')->value!=$_smarty_tpl->tpl_vars['page']->value){?>								<a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>							  <?php }else{ ?>								<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
							  <?php }?>							<?php }} ?>							<?php if ($_smarty_tpl->getVariable('next')->value>0){?>							  <a href="index.php?page=<?php echo $_smarty_tpl->getVariable('next')->value;?>
">Next</a>							<?php }else{ ?>									Next							<?php }?>							<?php if ($_smarty_tpl->getVariable('next')->value>0){?>								<a href="index.php?page=<?php echo ceil($_smarty_tpl->getVariable('number_of_jobs')->value/$_smarty_tpl->getVariable('jobs_per_page')->value);?>
">Last</a>							<?php }else{ ?>							   Last							<?php }?>						</div>					</div>					<?php }else{ ?>				  <p>No jobs has been posted.</p>				<?php }?>			</div>		</div>		<div id="rightColumn">		    <?php $_template = new Smarty_Internal_Template('loginBig.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>		    <img src="images/job-search.jpg" id="advertisement" alt=""/>		    <?php $_template = new Smarty_Internal_Template('showCategories.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>		        </div>							<?php $_template = new Smarty_Internal_Template('externalLink.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>	</div>	<?php $_template = new Smarty_Internal_Template('foot.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?></body></html>