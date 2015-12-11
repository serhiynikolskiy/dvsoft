<div class="column-1">
			
</div>
<div class="column-2">
		<div class="column-2-left">
				<table><?php
					for ($i=0; $i<count($user_list); $i++)
					{	?>
						<tr>
								<td class="td_users"><?=$user_list[$i]['name']?></td>
								<td class="td_users"><?=$user_list[$i]['surname']?></td>
								<td class="td_users"><?=$user_list[$i]['phone']?></td>
								<td class="td_users"><?=$user_list[$i]['email']?></td>
						</tr>
						<?php
					}?>
				</table>
		</div>
		<div class="column-2-right">
		</div>
</div>