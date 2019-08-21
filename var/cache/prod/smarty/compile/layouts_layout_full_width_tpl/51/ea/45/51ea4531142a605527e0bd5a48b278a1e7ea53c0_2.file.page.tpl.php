<?php
/* Smarty version 3.1.33, created on 2019-08-19 20:19:06
  from '/var/www/html/danshop/themes/leo_nunica/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5b043ac957c1_98325877',
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
function content_5d5b043ac957c1_98325877 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2927774275d5b043abd0c63_37132291', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_13938551825d5b043abd1df3_56920996 extends Smarty_Internal_Block
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
class Block_15362817215d5b043abd14c0_48630983 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13938551825d5b043abd1df3_56920996', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_7275953065d5b043ac92a17_81007914 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_16897410835d5b043ac932c0_94464387 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_8713847465d5b043ac92308_89514664 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7275953065d5b043ac92a17_81007914', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16897410835d5b043ac932c0_94464387', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_18364561255d5b043ac944f2_01617919 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_16642513215d5b043ac93f74_63811429 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18364561255d5b043ac944f2_01617919', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_2927774275d5b043abd0c63_37132291 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2927774275d5b043abd0c63_37132291',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_15362817215d5b043abd14c0_48630983',
  ),
  'page_title' => 
  array (
    0 => 'Block_13938551825d5b043abd1df3_56920996',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_8713847465d5b043ac92308_89514664',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_7275953065d5b043ac92a17_81007914',
  ),
  'page_content' => 
  array (
    0 => 'Block_16897410835d5b043ac932c0_94464387',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_16642513215d5b043ac93f74_63811429',
  ),
  'page_footer' => 
  array (
    0 => 'Block_18364561255d5b043ac944f2_01617919',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15362817215d5b043abd14c0_48630983', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8713847465d5b043ac92308_89514664', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16642513215d5b043ac93f74_63811429', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
