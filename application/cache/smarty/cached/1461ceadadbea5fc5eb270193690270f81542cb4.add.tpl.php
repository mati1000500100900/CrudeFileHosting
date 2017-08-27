<?php /*%%SmartyHeaderCode:41098934559a1d04596b552-68165494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1461ceadadbea5fc5eb270193690270f81542cb4' => 
    array (
      0 => '/profiles/m/ma/mat/mati1000500100900/xfiles.c0.pl/application/views/add.tpl',
      1 => 1503858862,
      2 => 'file',
    ),
    '79b8a97e96463b3f49a53a4b17dbba571c184c46' => 
    array (
      0 => '/profiles/m/ma/mat/mati1000500100900/xfiles.c0.pl/application/views/main.tpl',
      1 => 1503874590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41098934559a1d04596b552-68165494',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_59a350ea897483_60276679',
  'has_nocache_code' => true,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59a350ea897483_60276679')) {function content_59a350ea897483_60276679($_smarty_tpl) {?><!DOCTYPE html>
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

	<div class='container'>
		<form method='post' action='<?php echo base_url();?>
add' enctype='multipart/form-data'>
			<div class='panel panel-default' >
				<div class='panel-heading'>Add new file (max size: <?php echo ini_get('upload_max_filesize');?>
) <?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
</div>
				<div class='panel-body'>
					
					<div class="form-group">	
						<input type='file' class="form-control-file" name='file0'><br>
					</div>
					<div class="form-group">
						<input class='form-control' type='password' name='pass' placeholder='password'>
					</div>
				</div>
				<div class="panel-footer">
					<input class='btn btn-default' type='submit'>
				</div>
			</div>
		</form>
	</div>


<script type="text/javascript" src="http://xfiles.c0.pl/themes/default/js/jquery.js"></script>
<script type="text/javascript" src="http://xfiles.c0.pl/themes/default/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://xfiles.c0.pl/themes/default/js/bootbox.min.js"></script>

<script type="text/javascript" src="http://xfiles.c0.pl/themes/default/js/main.js?cache=2"></script>
</body>
</html><?php }} ?>
