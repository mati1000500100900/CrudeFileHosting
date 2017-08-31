<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<title>Serwer Plików</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
{css('bootstrap.css')}
{css('main.css?xds')} 
</head>
<body>
<nav class='navbar navbar-default navbar-fixed-top' >
	<div class='container-fluid'>
		<div class='navbar-header'>
			<a class='navbar-brand' href='{base_url()}'>Serwer Plików</a>
		</div>
		<ul class='nav navbar-nav navbar-right'>
			<li class='nav-item'><a class='nav-link' href='{base_url()}add'>Dodaj</a></li>
		</ul>
	</div>
</nav>
<br><br><br>
{block name=body}empty{/block}
{js('jquery.js')}
{js('bootstrap.min.js')}
{js('bootbox.min.js')}
{js('main.js?xd')}
</body>
</html>