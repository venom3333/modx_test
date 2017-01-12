<?php /* Smarty version 3.1.27, created on 2017-01-12 12:41:31
         compiled from "D:\domens\localhost\modx.test\setup\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:195803306958774f4b754d71_52888361%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21c56d871d96ba30f8274ede694022d3145a64de' => 
    array (
      0 => 'D:\\domens\\localhost\\modx.test\\setup\\templates\\footer.tpl',
      1 => 1483436692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195803306958774f4b754d71_52888361',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58774f4b75c1c2_16648211',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58774f4b75c1c2_16648211')) {
function content_58774f4b75c1c2_16648211 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'D:/domens/localhost/modx.test/core/model/smarty/plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '195803306958774f4b754d71_52888361';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>