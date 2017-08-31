{extends file='main.tpl'}
{block name=body nocache}
	{foreach $query as $row}
		<div class='container' id='file{$row->id}'>
			<div class='panel panel-default' >
				<div class='panel-body'>
					<table>
						<tr>
							<td class='shrink'>
								{if $row->isimage && $row->pass == NULL}
									<img onClick='preview("{$row->src}")' style='background-image:url("{base_url()}files/{$row->src}");' class='ratio'>
								{else}
									<img src='{base_url()}ext/{ext_test(pathinfo($row->src, 4))}.png' alt='icon' class='icon'>
								{/if}
							</td>
							<td> </td>
							<td class='expand'>
								<div class='overflow'>
									Nazwa: {wordwrap($row->name,8,'<wbr>',true)}<br>
									Rozmiar: {$row->size}KB<br>
									Dodano: {$row->time}<br>
									Hasło: {if $row->pass == NULL}Nie{else}Tak{/if} 
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
