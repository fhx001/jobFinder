<?php /* Smarty version Smarty-3.0.6, created on 2012-05-25 13:32:57
         compiled from "./templates/user_detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9577733994fbefd69452407-41998230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '486064f5c07ab4c3686a9a34d16015b74f9a7854' => 
    array (
      0 => './templates/user_detail.tpl',
      1 => 1337916775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9577733994fbefd69452407-41998230',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- User's Detail Page for the employer to check applicants -->
<!DOCTYPE HTML>
<?php $_template = new Smarty_Internal_Template('head.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('title','register'); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	<div id="content">
	    <div id="leftColumn">
			<div id="searchBox">
			  <h1 id="findJob">Applicant</h1>
			  <br/>
			  <br/>
			  <table id="moreLatestJobsTable">
				<tr><td class="registerForm">First Name: </td><td class="registerForm"><?php echo $_smarty_tpl->getVariable('applicant')->value['first_name'];?>
</td></tr>
				<tr><td class="registerForm">Last Name: </td><td class="registerForm"><?php echo $_smarty_tpl->getVariable('applicant')->value['last_name'];?>
</td></tr>
				<tr><td class="registerForm">Email: </td><td class="registerForm"><?php echo $_smarty_tpl->getVariable('applicant')->value['email'];?>
</td></tr>
				<tr><td class="registerForm">Phone: </td><td class="registerForm"><?php echo $_smarty_tpl->getVariable('applicant')->value['phone_number'];?>
</td></tr>
				<tr></tr>
				<tr><td class="registerForm">Photo: </td><td><img src="getImage.php?id=<?php echo $_smarty_tpl->getVariable('applicant')->value['user_id'];?>
" width="120" height="120" alt="photo"/></td></tr>
			  </table>
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
