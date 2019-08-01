<?php
/* Smarty version 3.1.33, created on 2019-08-01 09:29:47
  from '/var/www/html/danshop/themes/leo_nunica/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42b10bcd2b86_03998514',
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
function content_5d42b10bcd2b86_03998514 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19255840585d42b10bcccd45_10363298', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_9291405185d42b10bccdc29_59992695 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_337842045d42b10bccfc00_45632953 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_6191628835d42b10bccf047_73548526 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_337842045d42b10bccfc00_45632953', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_19255840585d42b10bcccd45_10363298 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_19255840585d42b10bcccd45_10363298',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_9291405185d42b10bccdc29_59992695',
  ),
  'page_content' => 
  array (
    0 => 'Block_6191628835d42b10bccf047_73548526',
  ),
  'hook_home' => 
  array (
    0 => 'Block_337842045d42b10bccfc00_45632953',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9291405185d42b10bccdc29_59992695', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6191628835d42b10bccf047_73548526', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
