<?php
/* Smarty version 3.1.33, created on 2019-08-19 20:53:04
  from '/var/www/html/danshop/modules/appagebuilder/views/templates/admin/shortcodes/ApColumn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5b0c308d3ba3_61024317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21d8dc42cd2036625d09e6f9651c756911bd414f' => 
    array (
      0 => '/var/www/html/danshop/modules/appagebuilder/views/templates/admin/shortcodes/ApColumn.tpl',
      1 => 1564687080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5b0c308d3ba3_61024317 (Smarty_Internal_Template $_smarty_tpl) {
?><p><input type="text" name="controller_pages" value="<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
" class="em_text"/></p>
<p><select size="25" name="controller_pages_select" class="em_list" multiple="multiple">

<option disabled="disabled"><?php echo $_smarty_tpl->tpl_vars['_core_']->value;?>
</option>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['controllers']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
    <?php if (in_array($_smarty_tpl->tpl_vars['k']->value,$_smarty_tpl->tpl_vars['arr_controllers']->value)) {?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</option>
    <?php } else { ?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</option>
    <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules_controllers_type']->value, 'label', false, 'type');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['label']->value) {
?>
    <option disabled="disabled">________________________________________ <?php echo $_smarty_tpl->tpl_vars['label']->value;?>
 ________________________________________</option>
    <?php $_smarty_tpl->_assignInScope('all_modules_controllers', $_smarty_tpl->tpl_vars['controllers_modules']->value[$_smarty_tpl->tpl_vars['type']->value]);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_modules_controllers']->value, 'modules_controllers', false, 'module');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['module']->value => $_smarty_tpl->tpl_vars['modules_controllers']->value) {
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules_controllers']->value, 'cont');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cont']->value) {
?>
            <?php $_smarty_tpl->_assignInScope('key', "module-".((string)$_smarty_tpl->tpl_vars['module']->value)."-".((string)$_smarty_tpl->tpl_vars['cont']->value));?>
            <?php if (in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['arr_controllers']->value)) {?>
                <option value="module-<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['cont']->value;?>
" selected="selected">module__<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
__<?php echo $_smarty_tpl->tpl_vars['cont']->value;?>
</option>
            <?php } else { ?>
                <option value="module-<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['cont']->value;?>
">module__<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
__<?php echo $_smarty_tpl->tpl_vars['cont']->value;?>
</option>
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select></p><?php }
}
