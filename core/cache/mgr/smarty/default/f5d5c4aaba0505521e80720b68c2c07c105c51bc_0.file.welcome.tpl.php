<?php /* Smarty version 3.1.27, created on 2017-01-12 12:41:42
         compiled from "D:\domens\localhost\modx.test\boss\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:68374693958774f56359fc3_48251446%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5d5c4aaba0505521e80720b68c2c07c105c51bc' => 
    array (
      0 => 'D:\\domens\\localhost\\modx.test\\boss\\templates\\default\\welcome.tpl',
      1 => 1484214084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68374693958774f56359fc3_48251446',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58774f5635afb4_35378449',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58774f5635afb4_35378449')) {
function content_58774f5635afb4_35378449 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '68374693958774f56359fc3_48251446';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>