<?php /* Smarty version Smarty-3.0.6, created on 2012-05-25 14:16:09
         compiled from "./templates/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1183653244fbf0789d1ed53-53374899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb669023950c29719bac9ad0fab891ac18fb23f9' => 
    array (
      0 => './templates/admin.tpl',
      1 => 1337919368,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1183653244fbf0789d1ed53-53374899',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- Home Page For Unregistered User And Regular user -->
<!DOCTYPE HTML>
<?php $_template = new Smarty_Internal_Template('head.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('title','admin'); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	<div id="content">
	    <div id="leftColumn">
			<div id="searchBox">
			  <h1 id="findJob">Asign A Manager</h1>
			  <div style="margin:20px">
			  <form action="admin_action.php" Method="POST" onsubmit="return inputValidate()">
			    <p style="font-size:20px;">User Email: </p><input type="email" name="email" id="email"/> <br/>
				<p style="font-size:20px;">Employer Name: </p><input type="text" name="employer_name" id="employer_name"/> <br/> <br/>
				<input type="submit" value="Asign"/>
				<br/>
				<br/>
			  </form>
			  </div>
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

<script type="text/javascript">
  function inputValidate(){
    if($("#email").val()==""){
	  alert("Where is the email ?");
	  return false;
	}
    if($("#employer_name").val()==""){
	  alert("Where is the employer name ?");
	  return false;
	}
	else return true;
  }
</script>
</html>
