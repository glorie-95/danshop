<?php
/* Smarty version 3.1.33, created on 2019-08-19 21:06:02
  from '/var/www/html/danshop/modules/appagebuilder/views/templates/hook/ApImageGalleryProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5b0f3adfd727_03597138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcf3558f7368e0023caf3c2651e16d249595f486' => 
    array (
      0 => '/var/www/html/danshop/modules/appagebuilder/views/templates/hook/ApImageGalleryProduct.tpl',
      1 => 1564687080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5b0f3adfd727_03597138 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApImageGalleryProduct -->
<div class="widget col-lg-12 col-md-6 col-sm-6 col-xs-6 col-sp-12">
	<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>
    <!-- <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['smallimage']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
     -->
    <?php if (isset($_smarty_tpl->tpl_vars['images']->value)) {?>
    <div class="widget-images block">
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title']) && !empty($_smarty_tpl->tpl_vars['formAtts']->value['title'])) {?>
        <h4 class="title_block">
            <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

        </h4>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) && $_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
            <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
        <?php }?>
        <div class="block_content clearfix">
                <div class="images-list clearfix">    
                <div class="row">
                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image', false, NULL, 'images', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
                    <div class="image-item <?php if ($_smarty_tpl->tpl_vars['columns']->value == 5) {?> col-md-2-4 <?php } else { ?> col-md-<?php echo htmlspecialchars(12/intval($_smarty_tpl->tpl_vars['columns']->value), ENT_QUOTES, 'UTF-8');
}?> col-xs-12">
                        <a class="fancybox" rel="leogallery<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" href= "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['image']->value['link_rewrite'],$_smarty_tpl->tpl_vars['image']->value['id_image'],$_smarty_tpl->tpl_vars['thickimage']->value),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                            <img class="replace-2x img-fluid" src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['image']->value['link_rewrite'],$_smarty_tpl->tpl_vars['image']->value['id_image'],$_smarty_tpl->tpl_vars['smallimage']->value),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt=""/>
                    	</a>
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
    </div>
	<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>
    <?php echo '<script'; ?>
 type="text/javascript">
        ap_list_functions.push(function(){
        $(".fancybox").fancybox({
            openEffect : 'none',
            closeEffect : 'none'
        });
    });
    <?php echo '</script'; ?>
>
    <?php }?> 
</div><?php }
}
