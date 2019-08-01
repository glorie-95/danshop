<?php
/* Smarty version 3.1.33, created on 2019-08-01 09:29:49
  from '/var/www/html/danshop/themes/leo_nunica/templates/errors/not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42b10d0def98_16646350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '152a0b6d744e7bbfc82a887fd7cffc8509b50b7c' => 
    array (
      0 => '/var/www/html/danshop/themes/leo_nunica/templates/errors/not-found.tpl',
      1 => 1563971745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d42b10d0def98_16646350 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18344174005d42b10d0da2c7_82464837', 'page_content');
?>

</section>
<?php }
/* {block 'search'} */
class Block_2126904675d42b10d0dc8d1_67938089 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'search'} */
/* {block 'hook_not_found'} */
class Block_5046324115d42b10d0de335_20975483 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_not_found'} */
/* {block 'page_content'} */
class Block_18344174005d42b10d0da2c7_82464837 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_18344174005d42b10d0da2c7_82464837',
  ),
  'search' => 
  array (
    0 => 'Block_2126904675d42b10d0dc8d1_67938089',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_5046324115d42b10d0de335_20975483',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  
    <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'pagenotfound') {?>
      <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Sorry for the inconvenience, but the Web address you've entered is no longer available.",'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
    <?php }?>

    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search again what you are looking for','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>
    
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2126904675d42b10d0dc8d1_67938089', 'search', $this->tplIndex);
?>


    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
" class="back-to-home" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to home','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to home','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span><i class="fa fa-arrow-circle-right"></i></a>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5046324115d42b10d0de335_20975483', 'hook_not_found', $this->tplIndex);
?>


  <?php
}
}
/* {/block 'page_content'} */
}
