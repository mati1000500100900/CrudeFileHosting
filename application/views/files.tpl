{extends file='main.tpl'}
{block name=body nocache}
	{foreach $query as $row}
		<div class='container' id='file{$row->id}'>
			<div class='panel panel-default' >
				<div class='panel-body'>
					<table>
						<tr>
							<td class='shrink'>
								<img src='{base_url()}ext/{pathinfo($row->src, 4)|lower}.png' class='icon'>
							</td>
							<td> </td>
							<td class='expand'>
								<div class='overflow'>
									name: {$row->name}<br>
									size: {$row->size}KB<br>
									added: {$row->time}<br>
									protected: {if $row->pass == NULL}no{else}yes{/if} 
								</div>
							</td>
							<td>
								{if $row->pass == NULL}
									<button type="button" onClick='deleteFile("{$row->id}")' class="btn btn-default glyphicon glyphicon-trash pull-right" title="Delete"></button>
									<button type="button" onClick='downloadFile("{$row->src}","{$row->name}")' class="btn btn-default glyphicon glyphicon-download pull-right" title="Download"></button>
								{else}
									<button type="button" onClick='deleteProtectedFile("{$row->id}")' class="btn btn-default glyphicon glyphicon-trash pull-right" title="Delete"></button>
									<button type="button" onClick='downloadProtectedFile("{$row->id}")' class="btn btn-default glyphicon glyphicon-download pull-right" title="Download"></button>
								{/if}
							</td>
						</tr>
					</table>
					
				</div>
			</div>
		</div>
	{/foreach}
{/block}
