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
<!-- Manager home page -->
$_template->assign('title','IndeedJobs'); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('jobs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['Job_title'];?>
</a></td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['start_date'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value['end_date'];?>
</td></tr>
">Previous</a>
if ($_smarty_tpl->tpl_vars['page']->total > 0){
for ($_smarty_tpl->tpl_vars['page']->value = 1, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++){
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration == 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration == $_smarty_tpl->tpl_vars['page']->total;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>

">Next</a>
">Last</a>
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>		
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>