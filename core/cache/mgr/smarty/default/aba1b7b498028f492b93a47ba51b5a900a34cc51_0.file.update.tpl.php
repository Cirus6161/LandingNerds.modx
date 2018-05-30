<?php
/* Smarty version 3.1.31, created on 2018-05-30 15:08:53
  from "C:\OSPanel\domains\LandingNerds.modx\smanager\templates\default\resource\staticresource\update.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b0e9455df4af2_45053727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aba1b7b498028f492b93a47ba51b5a900a34cc51' => 
    array (
      0 => 'C:\\OSPanel\\domains\\LandingNerds.modx\\smanager\\templates\\default\\resource\\staticresource\\update.tpl',
      1 => 1526905285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0e9455df4af2_45053727 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="modx-panel-static-div"></div>
<div id="modx-resource-tvs-div" class="modx-resource-tab x-form-label-left x-panel"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }
}
}
