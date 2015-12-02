<?php /* Smarty version Smarty-3.0.6, created on 2012-05-25 12:42:08
         compiled from "./templates/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1225071204fbef180c52d61-46470414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cbf1e8fe3fd40b5d5d98f1481941b0b65780f26' => 
    array (
      0 => './templates/register.tpl',
      1 => 1337870315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1225071204fbef180c52d61-46470414',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- Register to be a memer -->
<!DOCTYPE HTML>
<?php $_template = new Smarty_Internal_Template('head.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('title','register'); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	<div id="content">
	    <div id="leftColumn">
			<div id="searchBox">
			  <h1 id="findJob">Regist To Be A Member</h1>
			  <br/>
			  <br/>
			  <form action="register_action.php" Method="POST" onSubmit="return inputValidation()" enctype="multipart/form-data">
				  <table id="moreLatestJobsTable">
					<tr><td class="registerForm">First Name *</td><td class="registerForm"><input type="text"  size="35" id="first_name" name="first_name" /></td></tr>
					<tr><td class="registerForm">Last Name *</td><td class="registerForm"><input type="text"  size="35" id="last_name"  name="last_name" /></td></tr>
					<tr><td class="registerForm">Password *</td><td class="registerForm"><input type="password" size="35" id="password"  name="password"></td></tr>
					<tr><td class="registerForm">Repeat Password *</td><td class="registerForm"><input type="password" size="35" id="repeat_password"  name="repeat_password"></td></tr>
					<tr><td class="registerForm">Email *</td><td class="registerForm"><input type="email" size="35" id="email"  name="email"></td></tr>
					<tr><td class="registerForm">Photo</td><td class="registerForm"><input type="hidden" name="MAX_FILE_SIZE" value="1000000"><input type="file" name="userfile"></td></tr>
					<tr><td class="registerForm">PhoneNumber</td><td class="registerForm"><input type="text" size="35" name="phone_number"></td></tr>
					<tr><td class="registerForm">Description</td><td class="registerForm"><textarea rows="4" cols="28" name="description"></textarea></td></tr>
					<tr><td class="registerForm"></td><td class="button"><input class="button" type="reset" value="Reset">&nbsp; &nbsp;<input class="button" type="submit" value="Submit"></td></tr>
				</table>
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
