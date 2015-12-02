<?php /* Smarty version Smarty-3.0.6, created on 2012-05-25 12:53:51
         compiled from "./templates/loginBig.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19654879034fbef43fe01c86-65041193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98380c092fabde3fb52a56daf27dedf0dd25efc0' => 
    array (
      0 => './templates/loginBig.tpl',
      1 => 1337914430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19654879034fbef43fe01c86-65041193',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- For the login part on each page -->
		<div id="loginDialogDiv"></div>
		<div id="login">
		  <?php if (!$_smarty_tpl->getVariable('user_name')->value){?>
			<div id="employers">
				<h1>Employers - <span style="color:red;">Post Job</span></h1>
				<h1>Finders - <span style="color:red;">Apply Job</span></h1>
			</div>
			<div id="signIn">
				<a href="register.php"><span style="font-size:20px;">Register</span></a> 
				<span style="color:white;font-size:15px;">&nbsp; Or</span> &nbsp; &nbsp; 
				<input class="button" type="button" onclick="login()" value="&nbsp; Login &nbsp;"/>
			</div>
		  <?php }else{ ?>
		    <div id="logout">
			    <a href="logout.php"><span style="font-size:20px;">Logout</span></a> 
				<span style="color:white;font-size:15px;">&nbsp; Or</span> &nbsp; &nbsp; 
				<input class="button" type="button" onclick="updatePassword()" value="&nbsp; UpdatePassword &nbsp;"/>
			</div>
		  <?php }?>
		</div>