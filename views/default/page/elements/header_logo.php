<?php
/**
 * Elgg header logo
 */

$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();
?>

<h1>
	<a class="elgg-heading-site" href="<?php echo $site_url;?>">
		
	<table>
		<tr>
			<td>  
				<img src="_graphics/logo.png"/>
			</td>
                        <td> </td>
			<td>  
				<?php echo $site_name; ?>
			</td>
                        

		</tr>
	</table>
				
	</a>
</h1>
