<?php
/* Smarty version 3.1.33, created on 2019-08-19 20:19:12
  from '/var/www/html/danshop/modules/appagebuilder/views/templates/admin/ap_page_builder_shortcodes/ApModule.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5b0440bfdd38_79855301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da688bd558dcaaf03757e0f39c83538fa1b82d16' => 
    array (
      0 => '/var/www/html/danshop/modules/appagebuilder/views/templates/admin/ap_page_builder_shortcodes/ApModule.tpl',
      1 => 1564687080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5b0440bfdd38_79855301 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\admin\ap_page_builder_shortcodes\ApModule -->
<div <?php if (!isset($_smarty_tpl->tpl_vars['apInfo']->value)) {?>id="default_widget"<?php }?> class="widget-row clearfix<?php if (isset($_smarty_tpl->tpl_vars['apInfo']->value)) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['apInfo']->value['name'],'html','UTF-8' ));
if (isset($_smarty_tpl->tpl_vars['apInfo']->value['icon_class'])) {?> widget-icon<?php }
}
if (isset($_smarty_tpl->tpl_vars['formAtts']->value)) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' ));
}?>" <?php if (isset($_smarty_tpl->tpl_vars['apInfo']->value)) {?>data-type="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['apInfo']->value['name'],'html','UTF-8' ));?>
"<?php }?>>
    <div class="widget-controll-top pull-right">
        <a href="javascript:void(0)" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Drag to sort Widget','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="widget-action waction-drag label-tooltip"><i class="icon-move"></i> </a>
        <a href="javascript:void(0)" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disable or Enable Column','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="widget-action btn-status  <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['active']) && !$_smarty_tpl->tpl_vars['formAtts']->value['active']) {?> deactive<?php } else { ?> active<?php }?> label-tooltip">
            <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['active']) && !$_smarty_tpl->tpl_vars['formAtts']->value['active']) {?>
                <i class="icon-remove"></i>
            <?php } else { ?>
                <i class="icon-ok"></i>
            <?php }?>
        </a>
        <a href="javascript:void(0)" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit Widget','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="widget-action btn-edit label-tooltip" <?php if (isset($_smarty_tpl->tpl_vars['apInfo']->value)) {?>data-type="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['apInfo']->value['name'],'html','UTF-8' ));?>
"<?php }?>><i class="icon-pencil"></i></a>
        <a href="javascript:void(0)" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate Widget','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="widget-action btn-duplicate label-tooltip"><i class="icon-paste"></i></a>
        <a href="javascript:void(0)" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete Column','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="widget-action btn-delete label-tooltip"><i class="icon-trash"></i></a>
    </div>
    <div class="widget-content">
        <img class="w-img" width="16" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['moduleDir']->value,'html','UTF-8' ));?>
appagebuilder/logo.gif" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Appolo Widget','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Appolo Widget','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
"/>
        <i class="icon w-icon<?php if (isset($_smarty_tpl->tpl_vars['apInfo']->value) && isset($_smarty_tpl->tpl_vars['apInfo']->value['icon_class'])) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['apInfo']->value['icon_class'],'html','UTF-8' ));
}?>"></i>
        <a href="javascript:void(0);" title="" class="widget-title">
			<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title']) && $_smarty_tpl->tpl_vars['formAtts']->value['title']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( rtrim($_smarty_tpl->tpl_vars['formAtts']->value['title']),'html','UTF-8' ));?>
 - 
			<?php } elseif (isset($_smarty_tpl->tpl_vars['formAtts']->value['name_module']) && $_smarty_tpl->tpl_vars['formAtts']->value['name_module']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['name_module'],"html" )),'html','UTF-8' ));?>
 - 
			<?php }?>
		
			<?php if (isset($_smarty_tpl->tpl_vars['apInfo']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['apInfo']->value['label'],'html','UTF-8' ));
}?></a>
    </div>
</div><?php }
}
