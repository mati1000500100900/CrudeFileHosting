<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-08-28 01:08:26
         compiled from "/profiles/m/ma/mat/mati1000500100900/xfiles.c0.pl/application/views/add.tpl" */ ?>
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
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_59a1d045a43723_37808781',
  'has_nocache_code' => true,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59a1d045a43723_37808781')) {function content_59a1d045a43723_37808781($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta name="viewport" content="width-device-width, initial-scale=1">
<title>ANON FILES</title>
<?php echo '/*%%SmartyNocache:41098934559a1d04596b552-68165494%%*/<?php echo css(\'bootstrap.css\');?>
/*/%%SmartyNocache:41098934559a1d04596b552-68165494%%*/';?>

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

	<div class='container'>
		<form method='post' action='<?php echo '/*%%SmartyNocache:41098934559a1d04596b552-68165494%%*/<?php echo base_url();?>
/*/%%SmartyNocache:41098934559a1d04596b552-68165494%%*/';?>
add' enctype='multipart/form-data'>
			<div class='panel panel-default' >
				<div class='panel-heading'>Add new file (max size: <?php echo '/*%%SmartyNocache:41098934559a1d04596b552-68165494%%*/<?php echo ini_get(\'upload_max_filesize\');?>
/*/%%SmartyNocache:41098934559a1d04596b552-68165494%%*/';?>
) <?php echo '/*%%SmartyNocache:41098934559a1d04596b552-68165494%%*/<?php echo $_smarty_tpl->tpl_vars[\'alert\']->value;?>
/*/%%SmartyNocache:41098934559a1d04596b552-68165494%%*/';?>
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


<?php echo js('jquery.js');?>

<?php echo js('bootstrap.min.js');?>

<?php echo js('bootbox.min.js');?>


<?php echo js('main.js?cache=2');?>

</body>
</html><?php }} ?>
