<?php
/* Smarty version 3.1.33, created on 2019-08-19 21:03:17
  from '/var/www/html/danshop/modules/leofeature/views/templates/hook/leo_wishlist_link.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5b0e956fce95_87541250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dd49af0137b44c8945dfd88632478302d7994e3' => 
    array (
      0 => '/var/www/html/danshop/modules/leofeature/views/templates/hook/leo_wishlist_link.tpl',
      1 => 1564687080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5b0e956fce95_87541250 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="mywishlist-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlist_link']->value, ENT_QUOTES, 'UTF-8');?>
">
	<span class="link-item">
		<i class="material-icons">&#xE87D;</i>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Wishlist','mod'=>'leofeature'),$_smarty_tpl ) );?>

	</span>
</a>

<?php }
}
