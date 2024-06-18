<?php
/* Smarty version 4.3.4, created on 2024-06-17 23:38:38
  from 'module:ps_customeraccountlinksps_customeraccountlinks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6671013e5a8da9_92102765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinksps_customeraccountlinks.tpl',
      1 => 1714465860,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_6671013e5a8da9_92102765 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/d2/2d/85/d22d851f6d7c12eb35c1c34c8e84baa801a8cea2_2.file.helpers.tpl.php',
    'uid' => 'd22d851f6d7c12eb35c1c34c8e84baa801a8cea2',
    'call_name' => 'smarty_template_function_renderLogo_5146592466669feaf5dd386_56987860',
  ),
));
?>
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://34.70.143.139/mi-cuenta" rel="nofollow">
      Su cuenta
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Su cuenta</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li><a href="http://34.70.143.139/datos-personales" title="Información" rel="nofollow">Información</a></li>
                  <li><a href="http://34.70.143.139/direccion" title="Añadir primera dirección" rel="nofollow">Añadir primera dirección</a></li>
                          <li><a href="http://34.70.143.139/historial-compra" title="Pedidos" rel="nofollow">Pedidos</a></li>
                          <li><a href="http://34.70.143.139/facturas-abono" title="Facturas por abono" rel="nofollow">Facturas por abono</a></li>
                                  <li>
    <a href="http://34.70.143.139/module/blockwishlist/lists" title="Mi lista de deseos" rel="nofollow">
      Lista de deseos
    </a>
  </li>
<li>
  <a href="//34.70.143.139/module/ps_emailalerts/account" title="Mis alertas">
    Mis alertas
  </a>
</li>

        <li><a href="http://34.70.143.139/?mylogout=" title="Cerrar sesión" rel="nofollow">Cerrar sesión</a></li>
       
	</ul>
</div>
<?php }
}
