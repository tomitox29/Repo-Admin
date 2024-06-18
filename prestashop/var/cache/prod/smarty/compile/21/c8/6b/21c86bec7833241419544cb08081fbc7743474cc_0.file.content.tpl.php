<?php
/* Smarty version 4.3.4, created on 2024-06-12 17:21:06
  from '/var/www/html/admin772pquvgjklwjqimfqv/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666a11428bda85_53677024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21c86bec7833241419544cb08081fbc7743474cc' => 
    array (
      0 => '/var/www/html/admin772pquvgjklwjqimfqv/themes/default/template/content.tpl',
      1 => 1718117484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666a11428bda85_53677024 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
