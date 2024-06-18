<?php
/* Smarty version 4.3.4, created on 2024-06-14 17:57:32
  from '/var/www/html/admin772pquvgjklwjqimfqv/themes/default/template/controllers/modules/configure.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_666cbccc096044_89115160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fca1fad5217f266525aa28cb046f3af31669c4fe' => 
    array (
      0 => '/var/www/html/admin772pquvgjklwjqimfqv/themes/default/template/controllers/modules/configure.tpl',
      1 => 1718117484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666cbccc096044_89115160 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1568821128666cbccc08fc61_75795651', 'pageTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_625477306666cbccc090ce1_82055716', 'pageBreadcrumb');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1801683398666cbccc0928b9_48258128', 'toolbarBox');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "page_header_toolbar.tpl");
}
/* {block 'pageTitle'} */
class Block_1568821128666cbccc08fc61_75795651 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageTitle' => 
  array (
    0 => 'Block_1568821128666cbccc08fc61_75795651',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2 class="page-title">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configure','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

</h2>
<h4 class="page-subtitle"><?php echo $_smarty_tpl->tpl_vars['module_display_name']->value;?>
</h4>
<?php
}
}
/* {/block 'pageTitle'} */
/* {block 'pageBreadcrumb'} */
class Block_625477306666cbccc090ce1_82055716 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageBreadcrumb' => 
  array (
    0 => 'Block_625477306666cbccc090ce1_82055716',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<ul class="breadcrumb page-breadcrumb">
	<?php if ($_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['name'] != '') {?>
		<li class="breadcrumb-current">
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['name'] ));?>

		</li>
	<?php }?>
	<li><?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
</li>
	<li>
		<i class="icon-wrench"></i>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configure','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

	</li>
</ul>
<?php
}
}
/* {/block 'pageBreadcrumb'} */
/* {block 'toolbarBox'} */
class Block_1801683398666cbccc0928b9_48258128 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'toolbarBox' => 
  array (
    0 => 'Block_1801683398666cbccc0928b9_48258128',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="page-bar toolbarBox">
	<div class="btn-toolbar">
		<ul class="nav nav-pills pull-right">
			<li>
				<a id="desc-module-back" class="toolbar_btn" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'sf','route'=>'admin_module_manage'),$_smarty_tpl ) );?>
">
					<i class="process-icon-back"></i>
					<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</div>
				</a>
			</li>
			<?php if (!empty($_smarty_tpl->tpl_vars['translateLinks']->value)) {?>
			<li>
				<a id="desc-module-translate" data-toggle="modal" data-target="#moduleTradLangSelect" class="toolbar_btn" href="#" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Translate'),$_smarty_tpl ) );?>
">
					<i class="process-icon-flag"></i>
					<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Translate','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</div>
				</a>
			</li>
			<?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['module_rtl_link']->value))) {?>
			<li>
				<a id="desc-module-rtl" class="toolbar_btn" href="<?php echo $_smarty_tpl->tpl_vars['module_rtl_link']->value;?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Generate RTL Stylesheets'),$_smarty_tpl ) );?>
">
					<i class="process-icon-rtl"></i>
					<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'RTL Module','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>
</div>
				</a>
			</li>
			<?php }?>
			<li>
				<a id="desc-module-hook" class="toolbar_btn" href="<?php echo $_smarty_tpl->tpl_vars['module_hook_link']->value;?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Manage hooks'),$_smarty_tpl ) );?>
">
					<i class="process-icon-anchor"></i>
					<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Manage hooks','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>
</div>
				</a>
			</li>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayModuleConfigureExtraButtons",'module_name'=>$_smarty_tpl->tpl_vars['module_name']->value),$_smarty_tpl ) );?>

		</ul>
	</div>
</div>


<?php
}
}
/* {/block 'toolbarBox'} */
}
