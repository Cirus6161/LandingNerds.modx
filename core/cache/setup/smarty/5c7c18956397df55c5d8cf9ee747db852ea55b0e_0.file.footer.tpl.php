<?php
/* Smarty version 3.1.31, created on 2018-05-21 15:21:48
  from "C:\OSPanel\domains\LandingNerds.modx\setup\templates\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b02b9dc848fb7_75866510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c7c18956397df55c5d8cf9ee747db852ea55b0e' => 
    array (
      0 => 'C:\\OSPanel\\domains\\LandingNerds.modx\\setup\\templates\\footer.tpl',
      1 => 1524072852,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b02b9dc848fb7_75866510 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'C:\\OSPanel\\domains\\LandingNerds.modx\\core\\model\\smarty\\plugins\\modifier.replace.php';
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
$_prefixVariable1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_prefixVariable1);?>
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
