<?php
/* Smarty version 4.3.4, created on 2024-06-15 05:43:42
  from '/var/www/html/themes/classic/templates/catalog/manufacturers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666d624ebd6816_49824459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69208430f46e8f24379fa0f9153a5d4135f4c001' => 
    array (
      0 => '/var/www/html/themes/classic/templates/catalog/manufacturers.tpl',
      1 => 1714465860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/brand.tpl' => 1,
  ),
),false)) {
function content_666d624ebd6816_49824459 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1491938788666d624ebd2008_92101889', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'brand_header'} */
class Block_1193738860666d624ebd28a4_66164166 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brands','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h1>
   <?php
}
}
/* {/block 'brand_header'} */
/* {block 'brand_miniature'} */
class Block_1206044826666d624ebd3e25_61406018 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <ul>
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
         <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/brand.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('brand'=>$_smarty_tpl->tpl_vars['brand']->value), 0, true);
?>
       <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
     </ul>
   <?php
}
}
/* {/block 'brand_miniature'} */
/* {block 'content'} */
class Block_1491938788666d624ebd2008_92101889 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1491938788666d624ebd2008_92101889',
  ),
  'brand_header' => 
  array (
    0 => 'Block_1193738860666d624ebd28a4_66164166',
  ),
  'brand_miniature' => 
  array (
    0 => 'Block_1206044826666d624ebd3e25_61406018',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 <section id="main">

   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1193738860666d624ebd28a4_66164166', 'brand_header', $this->tplIndex);
?>


   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1206044826666d624ebd3e25_61406018', 'brand_miniature', $this->tplIndex);
?>


 </section>
<?php
}
}
/* {/block 'content'} */
}
