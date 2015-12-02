<?php /* Smarty version Smarty-3.0.6, created on 2012-05-25 00:38:38
         compiled from "./templates/showCategories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6420329054fbe47eedcb566-89628403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84b1c9da2010e44d67e34d43ce0960f2fd956d29' => 
    array (
      0 => './templates/showCategories.tpl',
      1 => 1337870315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6420329054fbe47eedcb566-89628403',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- Show search by categoris -->
<div id="showCategories">
		  <div id="browsJobByCategories">Brows Jobs By Category</div>
		  <table id="fewCategories">
			<tr><td class="datacellone"><a href="searchJob.php?category=Education&amp;jobType1=1&amp;jobType2=2&amp;jobType3=3&amp;jobType4=4&amp;jobType5=5">Education</a></td></tr>
			<tr><td class="datacelltwo"><a href="searchJob.php?category=Technology&amp;jobType1=1&amp;jobType2=2&amp;jobType3=3&amp;jobType4=4&amp;jobType5=5">Technology</a></td></tr>
			<tr><td class="datacellone"><a href="searchJob.php?category=Government&amp;jobType1=1&amp;jobType2=2&amp;jobType3=3&amp;jobType4=4&amp;jobType5=5">Government</a></td></tr>
		  </table>
		  <table id="moreCategories" style="display:none;">
			<tr><td class="datacellone"><a href="searchJob.php?category=Mining&amp;jobType1=1&amp;jobType2=2&amp;jobType3=3&amp;jobType4=4&amp;jobType5=5">Mining</a></td></tr>
			<tr><td class="datacelltwo"><a href="searchJob.php?category=Retail&amp;jobType1=1&amp;jobType2=2&amp;jobType3=3&amp;jobType4=4&amp;jobType5=5">Retail</a></td></tr>
		  </table>
		  <a id="viewMoreCategories">View More Categories</a>
		</div>