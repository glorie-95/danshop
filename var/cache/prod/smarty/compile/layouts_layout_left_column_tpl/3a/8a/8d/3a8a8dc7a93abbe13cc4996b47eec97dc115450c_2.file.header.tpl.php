<?php
/* Smarty version 3.1.33, created on 2019-08-01 09:31:26
  from '/var/www/html/danshop/themes/leo_nunica/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42b16e1c82a6_55845062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a8a8dc7a93abbe13cc4996b47eec97dc115450c' => 
    array (
      0 => '/var/www/html/danshop/themes/leo_nunica/templates/_partials/header.tpl',
      1 => 1563971745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d42b16e1c82a6_55845062 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12453925155d42b16e1bed87_59974546', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7464170875d42b16e1c1764_77920791', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1530004305d42b16e1c5bc0_67866516', 'header_top');
}
/* {block 'header_banner'} */
class Block_12453925155d42b16e1bed87_59974546 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_12453925155d42b16e1bed87_59974546',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-banner">
    <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayBanner']) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayBanner'] == 0) {?>
      <div class="container">
      <?php }?>
        <div class="inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>
</div>
    <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayBanner']) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayBanner'] == 0) {?>
      </div>
      <?php }?>
  </div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_7464170875d42b16e1c1764_77920791 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_7464170875d42b16e1c1764_77920791',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <nav class="header-nav">
    <div class="topnav">
      <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav1']) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav1'] == 0) {?>
      <div class="container">
      <?php }?>
        <div class="inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>
</div>
      <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav1']) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav1'] == 0) {?>
      </div>
      <?php }?>
    </div>
    <div class="bottomnav">
      <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav2']) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav2'] == 0) {?>
        <div class="container">
      <?php }?>
        <div class="inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>
</div>
      <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav2']) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav2'] == 0) {?>
        </div>
      <?php }?>
    </div>
  </nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_1530004305d42b16e1c5bc0_67866516 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_1530004305d42b16e1c5bc0_67866516',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-top">
    <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayTop']) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayTop'] == 0) {?>
          <div class="container">
        <?php }?>
      <div class="inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>
</div>
        <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayTop']) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayTop'] == 0) {?>
          </div>
        <?php }?>
  </div>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}
