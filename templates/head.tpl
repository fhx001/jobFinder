<!-- Head File For Each Page -->
<html>
<head>
	<title>{$title}</title>
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
		{if $user_name}
		  <p style="font-size:15px;color:red">Current User : {$user_name}</p>
        {else}
		 <p><a onclick="login()">Log in</a> or <a href="register.php">Register</a></p>		
        {/if}		
	</div>
	<div id="header">
		<a href="index.php" class="logo"><img src="images/logo.png" alt="setalpm" width="160" height="48" /></a>
		<ul id="menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="register.php">Register</a></li>
			<li class="last"><a href="docs/document.html">Document</a></li>
		</ul>
	</div>