<?php
/* Smarty version 3.1.33, created on 2019-08-19 20:19:06
  from '/var/www/html/danshop/themes/leo_nunica/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5b043a9902c6_22082439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89a6abb6e69c3949ef1de24a2f6c75991f590e06' => 
    array (
      0 => '/var/www/html/danshop/themes/leo_nunica/templates/index.tpl',
      1 => 1563971745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5b043a9902c6_22082439 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3911393965d5b043a98a365_65216490', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_8757810905d5b043a98b139_92726087 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_17377542625d5b043a98cf49_80929586 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_3856282765d5b043a98c417_40557040 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17377542625d5b043a98cf49_80929586', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_3911393965d5b043a98a365_65216490 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_3911393965d5b043a98a365_65216490',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_8757810905d5b043a98b139_92726087',
  ),
  'page_content' => 
  array (
    0 => 'Block_3856282765d5b043a98c417_40557040',
  ),
  'hook_home' => 
  array (
    0 => 'Block_17377542625d5b043a98cf49_80929586',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8757810905d5b043a98b139_92726087', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3856282765d5b043a98c417_40557040', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
