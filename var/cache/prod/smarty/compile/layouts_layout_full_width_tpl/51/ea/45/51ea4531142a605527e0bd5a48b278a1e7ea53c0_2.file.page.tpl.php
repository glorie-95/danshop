<?php
/* Smarty version 3.1.33, created on 2019-08-01 09:29:47
  from '/var/www/html/danshop/themes/leo_nunica/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42b10bd5c193_79537905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51ea4531142a605527e0bd5a48b278a1e7ea53c0' => 
    array (
      0 => '/var/www/html/danshop/themes/leo_nunica/templates/page.tpl',
      1 => 1563971745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d42b10bd5c193_79537905 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10682510435d42b10bcdc543_25143157', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1003568755d42b10bcdeb28_47680379 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_13965032355d42b10bcdda96_91832697 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1003568755d42b10bcdeb28_47680379', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_14178866745d42b10bd56ae6_49600985 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_16699070515d42b10bd57d09_11691304 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_18861585865d42b10bd55d16_91238442 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14178866745d42b10bd56ae6_49600985', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16699070515d42b10bd57d09_11691304', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_14873699755d42b10bd5a2b2_29502975 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_10629435175d42b10bd59732_17537803 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14873699755d42b10bd5a2b2_29502975', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_10682510435d42b10bcdc543_25143157 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10682510435d42b10bcdc543_25143157',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_13965032355d42b10bcdda96_91832697',
  ),
  'page_title' => 
  array (
    0 => 'Block_1003568755d42b10bcdeb28_47680379',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_18861585865d42b10bd55d16_91238442',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_14178866745d42b10bd56ae6_49600985',
  ),
  'page_content' => 
  array (
    0 => 'Block_16699070515d42b10bd57d09_11691304',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_10629435175d42b10bd59732_17537803',
  ),
  'page_footer' => 
  array (
    0 => 'Block_14873699755d42b10bd5a2b2_29502975',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13965032355d42b10bcdda96_91832697', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18861585865d42b10bd55d16_91238442', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10629435175d42b10bd59732_17537803', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
