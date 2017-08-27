{extends file='main.tpl'}
{block name=body nocache}
	<div class='container'>
		<form method='post' action='{base_url()}add' enctype='multipart/form-data'>
			<div class='panel panel-default' >
				<div class='panel-heading'>Add new file (max size: {ini_get('upload_max_filesize')}) {$alert}</div>
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
{/block}	