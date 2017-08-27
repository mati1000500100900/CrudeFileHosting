<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-08-28 01:09:32
         compiled from "/profiles/m/ma/mat/mati1000500100900/xfiles.c0.pl/application/views/files.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138731572759a20865ecb0f9-01849625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f1a3fd2baa300f764dc5b8aa0473c934f1f5740' => 
    array (
      0 => '/profiles/m/ma/mat/mati1000500100900/xfiles.c0.pl/application/views/files.tpl',
      1 => 1503875333,
      2 => 'file',
    ),
    '79b8a97e96463b3f49a53a4b17dbba571c184c46' => 
    array (
      0 => '/profiles/m/ma/mat/mati1000500100900/xfiles.c0.pl/application/views/main.tpl',
      1 => 1503874590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138731572759a20865ecb0f9-01849625',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_59a208660e61f3_28844474',
  'has_nocache_code' => true,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59a208660e61f3_28844474')) {function content_59a208660e61f3_28844474($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta name="viewport" content="width-device-width, initial-scale=1">
<title>ANON FILES</title>
<?php echo '/*%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/<?php echo css(\'bootstrap.css\');?>
/*/%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/';?>

<?php echo css('main.css?cache=1');?>
 
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" >
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php echo base_url();?>
">ANON FILES</a>
		</div>
		<ul class="nav navbar-nav navbar-right">
			<li class='nav-item'><a class='nav-link' href='<?php echo base_url();?>
add'>Add</a></li>
		</ul>
	</div>
</nav>
<br><br><br>

	<?php echo '/*%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/<?php  $_smarty_tpl->tpl_vars[\'row\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'row\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'query\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'row\']->key => $_smarty_tpl->tpl_vars[\'row\']->value) {
$_smarty_tpl->tpl_vars[\'row\']->_loop = true;
?>/*/%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/';?>

		<div class='container' id='file<?php echo '/*%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/<?php echo $_smarty_tpl->tpl_vars[\'row\']->value->id;?>
/*/%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/';?>
'>
			<div class='panel panel-default' >
				<div class='panel-body'>
					<table>
						<tr>
							<td class='shrink'>
								<img src='<?php echo '/*%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/<?php echo base_url();?>
/*/%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/';?>
ext/<?php echo '/*%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/<?php echo mb_strtolower(pathinfo($_smarty_tpl->tpl_vars[\'row\']->value->src,4), \'UTF-8\');?>
/*/%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/';?>
.png' class='icon'>
							</td>
							<td> </td>
							<td class='expand'>
								<div class='overflow'>
									name: <?php echo '/*%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/<?php echo $_smarty_tpl->tpl_vars[\'row\']->value->name;?>
/*/%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/';?>
<br>
									size: <?php echo '/*%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/<?php echo $_smarty_tpl->tpl_vars[\'row\']->value->size;?>
/*/%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/';?>
KB<br>
									added: <?php echo '/*%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/<?php echo $_smarty_tpl->tpl_vars[\'row\']->value->time;?>
/*/%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/';?>
<br>
									protected: <?php echo '/*%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/<?php if ($_smarty_tpl->tpl_vars[\'row\']->value->pass==null) {?>/*/%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/';?>
no<?php echo '/*%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/<?php } else { ?>/*/%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/';?>
yes<?php echo '/*%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/<?php }?>/*/%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/';?>
 
								</div>
							</td>
							<td>
								<?php echo '/*%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/<?php if ($_smarty_tpl->tpl_vars[\'row\']->value->pass==null) {?>/*/%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/';?>

									<button type="button" onClick='deleteFile("<?php echo '/*%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/<?php echo $_smarty_tpl->tpl_vars[\'row\']->value->id;?>
/*/%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/';?>
")' class="btn btn-default glyphicon glyphicon-trash pull-right" title="Delete"></button>
									<button type="button" onClick='downloadFile("<?php echo '/*%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/<?php echo $_smarty_tpl->tpl_vars[\'row\']->value->src;?>
/*/%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/';?>
","<?php echo '/*%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/<?php echo $_smarty_tpl->tpl_vars[\'row\']->value->name;?>
/*/%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/';?>
")' class="btn btn-default glyphicon glyphicon-download pull-right" title="Download"></button>
								<?php echo '/*%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/<?php } else { ?>/*/%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/';?>

									<button type="button" onClick='deleteProtectedFile("<?php echo '/*%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/<?php echo $_smarty_tpl->tpl_vars[\'row\']->value->id;?>
/*/%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/';?>
")' class="btn btn-default glyphicon glyphicon-trash pull-right" title="Delete"></button>
									<button type="button" onClick='downloadProtectedFile("<?php echo '/*%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/<?php echo $_smarty_tpl->tpl_vars[\'row\']->value->id;?>
/*/%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/';?>
")' class="btn btn-default glyphicon glyphicon-download pull-right" title="Download"></button>
								<?php echo '/*%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/<?php }?>/*/%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/';?>

							</td>
						</tr>
					</table>
					
				</div>
			</div>
		</div>
	<?php echo '/*%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/<?php } ?>/*/%%SmartyNocache:138731572759a20865ecb0f9-01849625%%*/';?>



<?php echo js('jquery.js');?>

<?php echo js('bootstrap.min.js');?>

<?php echo js('bootbox.min.js');?>


<?php echo js('main.js?cache=2');?>

</body>
</html><?php }} ?>
