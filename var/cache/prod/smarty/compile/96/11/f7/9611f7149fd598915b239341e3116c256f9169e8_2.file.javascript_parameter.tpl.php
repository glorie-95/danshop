<?php
/* Smarty version 3.1.33, created on 2019-08-01 09:29:46
  from '/var/www/html/danshop/modules/leobootstrapmenu/views/templates/hook/javascript_parameter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42b10ad30154_22943026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9611f7149fd598915b239341e3116c256f9169e8' => 
    array (
      0 => '/var/www/html/danshop/modules/leobootstrapmenu/views/templates/hook/javascript_parameter.tpl',
      1 => 1563971745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d42b10ad30154_22943026 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
	
	var FancyboxI18nClose = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
";
	var FancyboxI18nNext = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
";
	var FancyboxI18nPrev = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
";
	var current_link = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_link']->value, ENT_QUOTES, 'UTF-8');?>
";		
	var currentURL = window.location;
	currentURL = String(currentURL);
	currentURL = currentURL.replace("https://","").replace("http://","").replace("www.","").replace( /#\w*/, "" );
	current_link = current_link.replace("https://","").replace("http://","").replace("www.","");
	var text_warning_select_txt = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please select One to remove?','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
";
	var text_confirm_remove_txt = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure to remove footer row?','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
";
	var close_bt_txt = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
";
	var list_menu = [];
	var list_menu_tmp = {};
	var list_tab = [];
	var isHomeMenu = 0;
	
<?php echo '</script'; ?>
><?php }
}
