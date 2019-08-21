<?php
/* Smarty version 3.1.33, created on 2019-08-19 21:18:21
  from '/var/www/html/danshop/modules/leoslideshow/views/templates/hook/status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5b121de1a2b3_21020954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1173d23557e0180b4c8c8bed3356e829c5cb16d' => 
    array (
      0 => '/var/www/html/danshop/modules/leoslideshow/views/templates/hook/status.tpl',
      1 => 1564687080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5b121de1a2b3_21020954 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['gstatus']->value) || isset($_smarty_tpl->tpl_vars['status']->value)) {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['status_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img_link']->value;?>
" alt="" /></a>
<?php }?>

<?php }
}
