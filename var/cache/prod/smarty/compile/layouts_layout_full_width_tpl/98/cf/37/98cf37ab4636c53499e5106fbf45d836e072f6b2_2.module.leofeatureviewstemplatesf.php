<?php
/* Smarty version 3.1.33, created on 2019-08-19 21:03:44
  from 'module:leofeatureviewstemplatesf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5b0eb0d57842_05143814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98cf37ab4636c53499e5106fbf45d836e072f6b2' => 
    array (
      0 => 'module:leofeatureviewstemplatesf',
      1 => 1564687080,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5b0eb0d57842_05143814 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8961000965d5b0eb0d48881_29802767', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'content'} */
class Block_8961000965d5b0eb0d48881_29802767 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8961000965d5b0eb0d48881_29802767',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<section id="main">
		<div id="mywishlist">
			<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New wishlist','mod'=>'leofeature'),$_smarty_tpl ) );?>
</h2>
			<div class="new-wishlist">
				<div class="form-group">
					<label for="wishlist_name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','mod'=>'leofeature'),$_smarty_tpl ) );?>
</label>
					<input type="text" class="form-control" id="wishlist_name" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter name of new wishlist','mod'=>'leofeature'),$_smarty_tpl ) );?>
">
				</div>
				<div class="form-group has-success">
					<div class="form-control-feedback"></div>			 
				</div>
				<div class="form-group has-danger">		 
				  <div class="form-control-feedback"></div>		 
				</div>
				<button type="submit" class="btn btn-primary leo-save-wishlist-bt">
					<span class="leo-save-wishlist-loading cssload-speeding-wheel"></span>
					<span class="leo-save-wishlist-bt-text">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'leofeature'),$_smarty_tpl ) );?>

					</span>
				</button>
			</div>
			
				<div class="list-wishlist">
					<table class="table table-striped">
					  <thead class="wishlist-table-head">
						<tr>
						  <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','mod'=>'leofeature'),$_smarty_tpl ) );?>
</th>
						  <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','mod'=>'leofeature'),$_smarty_tpl ) );?>
</th>
						  <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Viewed','mod'=>'leofeature'),$_smarty_tpl ) );?>
</th>
						  <th class="wishlist-datecreate-head"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Created','mod'=>'leofeature'),$_smarty_tpl ) );?>
</th>
						  <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Direct Link','mod'=>'leofeature'),$_smarty_tpl ) );?>
</th>
						  <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Default','mod'=>'leofeature'),$_smarty_tpl ) );?>
</th>
						  <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'leofeature'),$_smarty_tpl ) );?>
</th>
						</tr>
					  </thead>
					  <tbody>
						<?php if ($_smarty_tpl->tpl_vars['wishlists']->value) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wishlists']->value, 'wishlists_item', false, NULL, 'for_wishlists', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['wishlists_item']->value) {
?>
								<tr>					 
									<td><a href="javascript:void(0)" class="view-wishlist-product" data-name-wishlist="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlists_item']->value['name'], ENT_QUOTES, 'UTF-8');?>
" data-id-wishlist="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlists_item']->value['id_wishlist'], ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons">&#xE8EF;</i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlists_item']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a><div class="leo-view-wishlist-product-loading leo-view-wishlist-product-loading-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlists_item']->value['id_wishlist'], ENT_QUOTES, 'UTF-8');?>
 cssload-speeding-wheel"></div></td>
									<td class="wishlist-numberproduct wishlist-numberproduct-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlists_item']->value['id_wishlist'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['wishlists_item']->value['number_product']), ENT_QUOTES, 'UTF-8');?>
</td>
									<td><?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['wishlists_item']->value['counter']), ENT_QUOTES, 'UTF-8');?>
</td>
									<td class="wishlist-datecreate"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlists_item']->value['date_add'], ENT_QUOTES, 'UTF-8');?>
</td>							
									<td><a class="view-wishlist" data-token="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlists_item']->value['token'], ENT_QUOTES, 'UTF-8');?>
" target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['view_wishlist_url']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['leo_is_rewrite_active']->value) {?>?<?php } else { ?>&<?php }?>token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlists_item']->value['token'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View','mod'=>'leofeature'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View','mod'=>'leofeature'),$_smarty_tpl ) );?>
</a></td>
									<td>
										
											<label class="form-check-label">
												<input class="default-wishlist form-check-input" data-id-wishlist="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlists_item']->value['id_wishlist'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['wishlists_item']->value['default'] == 1) {?>checked="checked"<?php }?>>
											</label>
									
									</td>
									<td><a class="delete-wishlist" data-id-wishlist="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlists_item']->value['id_wishlist'], ENT_QUOTES, 'UTF-8');?>
" href="javascript:void(0)" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'leofeature'),$_smarty_tpl ) );?>
"><i class="material-icons">&#xE872;</i></a></td>
								</tr>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php }?>
					  </tbody>
					</table>
				</div>
			<div class="send-wishlist">
				<a class="leo-send-wishlist-button btn btn-info" href="javascript:void(0)" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send this wishlist','mod'=>'leofeature'),$_smarty_tpl ) );?>
">
					<i class="material-icons">&#xE163;</i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send this wishlist','mod'=>'leofeature'),$_smarty_tpl ) );?>

				</a>
			</div>
			<section id="products">
				<div class="leo-wishlist-product products row">
				
				</div>
			</section>
			<ul class="footer_links">
				<li class="pull-xs-left"><a class="btn btn-outline" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true),'html' )), ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons">&#xE317;</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to Your Account','mod'=>'leofeature'),$_smarty_tpl ) );?>
</a></li>
				<li class="pull-xs-right"><a class="btn btn-outline" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons">&#xE88A;</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home','mod'=>'leofeature'),$_smarty_tpl ) );?>
</a></li>
			</ul>
		</div>
	</section>
<?php
}
}
/* {/block 'content'} */
}
