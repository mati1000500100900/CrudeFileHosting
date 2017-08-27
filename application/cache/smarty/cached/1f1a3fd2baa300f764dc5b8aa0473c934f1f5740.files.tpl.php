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
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_59a3512c483752_49934744',
  'has_nocache_code' => true,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59a3512c483752_49934744')) {function content_59a3512c483752_49934744($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta name="viewport" content="width-device-width, initial-scale=1">
<title>ANON FILES</title>
<?php echo css('bootstrap.css');?>

<link rel="stylesheet" type="text/css" href="http://xfiles.c0.pl/themes/default/css/main.css?cache=1" media="screen"> 
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" >
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="http://xfiles.c0.pl/">ANON FILES</a>
		</div>
		<ul class="nav navbar-nav navbar-right">
			<li class='nav-item'><a class='nav-link' href='http://xfiles.c0.pl/add'>Add</a></li>
		</ul>
	</div>
</nav>
<br><br><br>

	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['query']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
		<div class='container' id='file<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
'>
			<div class='panel panel-default' >
				<div class='panel-body'>
					<table>
						<tr>
							<td class='shrink'>
								<img src='<?php echo base_url();?>
ext/<?php echo mb_strtolower(pathinfo($_smarty_tpl->tpl_vars['row']->value->src,4), 'UTF-8');?>
.png' class='icon'>
							</td>
							<td> </td>
							<td class='expand'>
								<div class='overflow'>
									name: <?php echo $_smarty_tpl->tpl_vars['row']->value->name;?>
<br>
									size: <?php echo $_smarty_tpl->tpl_vars['row']->value->size;?>
KB<br>
									added: <?php echo $_smarty_tpl->tpl_vars['row']->value->time;?>
<br>
									protected: <?php if ($_smarty_tpl->tpl_vars['row']->value->pass==null) {?>no<?php } else { ?>yes<?php }?> 
								</div>
							</td>
							<td>
								<?php if ($_smarty_tpl->tpl_vars['row']->value->pass==null) {?>
									<button type="button" onClick='deleteFile("<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
")' class="btn btn-default glyphicon glyphicon-trash pull-right" title="Delete"></button>
									<button type="button" onClick='downloadFile("<?php echo $_smarty_tpl->tpl_vars['row']->value->src;?>
","<?php echo $_smarty_tpl->tpl_vars['row']->value->name;?>
")' class="btn btn-default glyphicon glyphicon-download pull-right" title="Download"></button>
								<?php } else { ?>
									<button type="button" onClick='deleteProtectedFile("<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
")' class="btn btn-default glyphicon glyphicon-trash pull-right" title="Delete"></button>
									<button type="button" onClick='downloadProtectedFile("<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
")' class="btn btn-default glyphicon glyphicon-download pull-right" title="Download"></button>
								<?php }?>
							</td>
						</tr>
					</table>
					
				</div>
			</div>
		</div>
	<?php } ?>


<script type="text/javascript" src="http://xfiles.c0.pl/themes/default/js/jquery.js"></script>
<script type="text/javascript" src="http://xfiles.c0.pl/themes/default/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://xfiles.c0.pl/themes/default/js/bootbox.min.js"></script>

<script type="text/javascript" src="http://xfiles.c0.pl/themes/default/js/main.js?cache=2"></script>
</body>
</html><?php }} ?>
