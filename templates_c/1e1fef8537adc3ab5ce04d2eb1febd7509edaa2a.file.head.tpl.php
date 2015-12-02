<?php /* Smarty version Smarty-3.0.6, created on 2012-05-25 00:38:38
         compiled from "./templates/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19858346844fbe47eecbe878-11546519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e1fef8537adc3ab5ce04d2eb1febd7509edaa2a' => 
    array (
      0 => './templates/head.tpl',
      1 => 1337870315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19858346844fbe47eecbe878-11546519',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- Head File For Each Page -->
<html>
<head>
	<title><?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<link rel="stylesheet" type="text/css" href="style/style.css" />
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
	<script src="js/webPro.js"></script>
</head>
<body>
	<div class="meta">
		<div class="metalinks">
			<a href="index.php"><img src="images/meta1.gif" alt="" width="15" height="14" /></a>
			<img src="images/meta2.gif" alt="" width="17" height="14" />
			<img src="images/meta3.gif" alt="" width="17" height="14" />
			<img src="images/meta4.gif" alt="" width="15" height="14" />
		</div>
		<?php if ($_smarty_tpl->getVariable('user_name')->value){?>
		  <p style="font-size:15px;color:red">Current User : <?php echo $_smarty_tpl->getVariable('user_name')->value;?>
</p>
        <?php }else{ ?>
		 <p><a onclick="login()">Log in</a> or <a href="register.php">Register</a></p>		
        <?php }?>		
	</div>
	<div id="header">
		<a href="index.php" class="logo"><img src="images/logo.png" alt="setalpm" width="160" height="48" /></a>
		<ul id="menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="register.php">Register</a></li>
			<li class="last"><a href="docs/document.html">Document</a></li>
		</ul>
	</div>