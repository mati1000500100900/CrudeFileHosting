<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<title>ANON FILES</title>
{css('bootstrap.css')}
{css('main.css')} 
</head>
<body>
<nav class='navbar navbar-default navbar-fixed-top' >
	<div class='container-fluid'>
		<div class='navbar-header'>
			<a class='navbar-brand' href='{base_url()}'>ANON FILES</a>
		</div>
		<ul class='nav navbar-nav navbar-right'>
			<li class='nav-item'><a class='nav-link' href='{base_url()}add'>Add</a></li>
		</ul>
	</div>
</nav>
<br><br><br>
{block name=body}empty{/block}
{js('jquery.js')}
{js('bootstrap.min.js')}
{js('bootbox.min.js')}
{js('main.js?cache=0')}
</body>
</html>