<?php
/* Smarty version 3.1.33, created on 2019-08-19 20:31:15
  from '/var/www/html/danshop/modules/appagebuilder/views/templates/hook/ApFacebook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5b07134456f9_96841835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb7ce6b9a1f5577aa9aecd77d4b0c324b110106b' => 
    array (
      0 => '/var/www/html/danshop/modules/appagebuilder/views/templates/hook/ApFacebook.tpl',
      1 => 1564687080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5b07134456f9_96841835 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApFacebook -->
 <div class="widget-facebook block">
	<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>
	<div id="fb-root"></div>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title']) && $_smarty_tpl->tpl_vars['formAtts']->value['title']) {?>
    <h4 class="title_block"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h4>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) && $_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
        <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['page_url']) && $_smarty_tpl->tpl_vars['formAtts']->value['page_url']) {
echo '<script'; ?>
 type="text/javascript">
ap_list_functions.push(function(){
    // Check avoid include duplicate library Facebook SDK
    if($("#facebook-jssdk").length == 0) {
        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    }
});
<?php echo '</script'; ?>
>
    
    <div class="fb-like-box" data-href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['page_url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" 
		<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['height']) && $_smarty_tpl->tpl_vars['formAtts']->value['height']) {?>data-height=<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['height'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>
		<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['width']) && $_smarty_tpl->tpl_vars['formAtts']->value['width']) {?>data-width=<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['width'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>
    	data-colorscheme="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['target'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" 
    	data-show-faces="<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['show_faces']) {?>true<?php } else { ?>false<?php }?>" 
    	data-header="<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['show_header']) {?>true<?php } else { ?>false<?php }?>" 
    	data-stream="<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['show_stream']) {?>true<?php } else { ?>false<?php }?>" 
    	data-show-border="<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['show_border']) {?>true<?php } else { ?>false<?php }?>">
    </div>
    <?php }?>
	<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>
</div><?php }
}
