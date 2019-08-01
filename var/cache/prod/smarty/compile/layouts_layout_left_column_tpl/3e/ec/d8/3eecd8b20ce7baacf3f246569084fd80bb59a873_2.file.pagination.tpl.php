<?php
/* Smarty version 3.1.33, created on 2019-08-01 09:31:26
  from '/var/www/html/danshop/themes/leo_nunica/templates/_partials/pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42b16e9ce3f7_72531509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3eecd8b20ce7baacf3f246569084fd80bb59a873' => 
    array (
      0 => '/var/www/html/danshop/themes/leo_nunica/templates/_partials/pagination.tpl',
      1 => 1563971745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d42b16e9ce3f7_72531509 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<nav class="pagination">
  <div class="col-sp-12 col-xs-12 col-md-6 col-lg-4 text-md-left text-xs-center">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21460396045d42b16e9c5fa1_16460329', 'pagination_summary');
?>

  </div>
  <div class="col-sp-12 col-xs-12 col-md-6 col-lg-8">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157776875d42b16e9c7a00_60252934', 'pagination_page_list');
?>

  </div>
</nav>
<?php }
/* {block 'pagination_summary'} */
class Block_21460396045d42b16e9c5fa1_16460329 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination_summary' => 
  array (
    0 => 'Block_21460396045d42b16e9c5fa1_16460329',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Showing %from%-%to% of %total% item(s)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%from%'=>$_smarty_tpl->tpl_vars['pagination']->value['items_shown_from'],'%to%'=>$_smarty_tpl->tpl_vars['pagination']->value['items_shown_to'],'%total%'=>$_smarty_tpl->tpl_vars['pagination']->value['total_items'])),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'pagination_summary'} */
/* {block 'pagination_page_list'} */
class Block_157776875d42b16e9c7a00_60252934 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination_page_list' => 
  array (
    0 => 'Block_157776875d42b16e9c7a00_60252934',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <?php if ($_smarty_tpl->tpl_vars['pagination']->value['should_be_displayed']) {?>
    <ul class="page-list clearfix text-md-right text-xs-center">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value['pages'], 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value['current']) {?> class="current" <?php }?>>
          <?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'spacer') {?>
            <span class="spacer">&hellip;</span>
          <?php } else { ?>
            <a
              rel="<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>prev<?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>next<?php } else { ?>nofollow<?php }?>"
              href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
              class="<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>previous <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>next <?php }
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('disabled'=>!$_smarty_tpl->tpl_vars['page']->value['clickable'],'js-search-link'=>true) )), ENT_QUOTES, 'UTF-8');?>
"
            >
              <?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>
                <i class="fa fa-angle-left"></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
              <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>
                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span><i class="fa fa-angle-right"></i>
              <?php } else { ?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>

              <?php }?>
            </a>
          <?php }?>
        </li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
      <?php }?>
    <?php
}
}
/* {/block 'pagination_page_list'} */
}
