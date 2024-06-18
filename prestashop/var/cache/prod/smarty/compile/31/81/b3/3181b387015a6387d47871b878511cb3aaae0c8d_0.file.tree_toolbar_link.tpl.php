<?php
/* Smarty version 4.3.4, created on 2024-06-14 17:57:31
  from '/var/www/html/admin772pquvgjklwjqimfqv/themes/default/template/helpers/tree/tree_toolbar_link.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666cbccbe579a2_78030254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3181b387015a6387d47871b878511cb3aaae0c8d' => 
    array (
      0 => '/var/www/html/admin772pquvgjklwjqimfqv/themes/default/template/helpers/tree/tree_toolbar_link.tpl',
      1 => 1718117484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666cbccbe579a2_78030254 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"<?php if ((isset($_smarty_tpl->tpl_vars['action']->value))) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php }
if ((isset($_smarty_tpl->tpl_vars['id']->value))) {?> id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
"<?php }?> class="btn btn-default">
	<?php if ((isset($_smarty_tpl->tpl_vars['icon_class']->value))) {?><i class="<?php echo $_smarty_tpl->tpl_vars['icon_class']->value;?>
"></i><?php }?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['label']->value),$_smarty_tpl ) );?>

</a>
<?php }
}
