<?php
/* Smarty version 3.1.33, created on 2019-08-19 20:19:12
  from '/var/www/html/danshop/admin623addtdx/themes/default/template/helpers/tree/tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5b0440ad98a2_12059230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da5c5dcb4e6079388b2d6490ed446997b5311cc2' => 
    array (
      0 => '/var/www/html/danshop/admin623addtdx/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1563970453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5b0440ad98a2_12059230 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
