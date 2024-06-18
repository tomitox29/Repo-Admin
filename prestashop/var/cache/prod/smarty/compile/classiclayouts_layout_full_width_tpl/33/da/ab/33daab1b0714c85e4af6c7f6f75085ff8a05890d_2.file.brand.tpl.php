<?php
/* Smarty version 4.3.4, created on 2024-06-15 05:43:42
  from '/var/www/html/themes/classic/templates/catalog/_partials/miniatures/brand.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666d624ec12276_04233739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33daab1b0714c85e4af6c7f6f75085ff8a05890d' => 
    array (
      0 => '/var/www/html/themes/classic/templates/catalog/_partials/miniatures/brand.tpl',
      1 => 1714465860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666d624ec12276_04233739 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_649758509666d624ec06755_70622587', 'brand_miniature_item');
?>

<?php }
/* {block 'brand_miniature_item'} */
class Block_649758509666d624ec06755_70622587 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'brand_miniature_item' => 
  array (
    0 => 'Block_649758509666d624ec06755_70622587',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <li class="brand">
    <div class="brand-img">
      <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
        <picture>
          <?php if (!empty($_smarty_tpl->tpl_vars['brand']->value['image']['bySize']['small_default']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['image']['bySize']['small_default']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
          <?php if (!empty($_smarty_tpl->tpl_vars['brand']->value['image']['bySize']['small_default']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['image']['bySize']['small_default']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
          <img
            src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['image']['bySize']['small_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
            alt="<?php if (!empty($_smarty_tpl->tpl_vars['brand']->value['image']['legend'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['image']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');
}?>"
            class="img-fluid"
            loading="lazy"
          >
        </picture>
      </a>
    </div>
    <div class="brand-infos">
      <p><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></p>
      <?php echo $_smarty_tpl->tpl_vars['brand']->value['text'];?>

    </div>
    <div class="brand-products">
      <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['brand']->value['nb_products'] > 1) {?>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%number% products','d'=>'Shop.Theme.Catalog','sprintf'=>array('%number%'=>$_smarty_tpl->tpl_vars['brand']->value['nb_products'])),$_smarty_tpl ) );?>

        <?php } elseif ($_smarty_tpl->tpl_vars['brand']->value['nb_products'] == 1) {?>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%number% product','d'=>'Shop.Theme.Catalog','sprintf'=>array('%number%'=>$_smarty_tpl->tpl_vars['brand']->value['nb_products'])),$_smarty_tpl ) );?>

        <?php } else { ?>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

        <?php }?>
      </a>
      <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View products','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
    </div>
  </li>
<?php
}
}
/* {/block 'brand_miniature_item'} */
}
