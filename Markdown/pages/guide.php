<?php

html_page_top1( plugin_lang_get( 'title' ) );
echo '<link rel="stylesheet" type="text/css" href="' . plugin_file("style.css") . '"/>';
html_page_top2( );

$url_image = helper_mantis_url('/images/fwa_mantis_logo.gif');
$image = "![fwa]($url_image)"; 

?>
<table id="guide">
	<tr>
		<th colspan=3 class="title">
			<?php echo plugin_lang_get('guide') ?>
		</th>
	</tr>

	<tr>
		<th class="category"> <?php echo plugin_lang_get('option') ?></th>
		<th class="category"> <?php echo plugin_lang_get('use') ?></th>
		<th class="category"> <?php echo plugin_lang_get('result') ?></th>
	</tr>

	<tr>
		<td class="category"><?php echo plugin_lang_get('nom_first_title')?></td>
		<td><?php echo nl2br( plugin_lang_get('first_title') ) ?></td>
		<td><?php echo string_display_links(plugin_lang_get('first_title')) ?></td>
	</tr>

	<tr>
		<td class="category"><?php echo plugin_lang_get('nom_second_title') ?></td>
		<td><?php echo nl2br( plugin_lang_get('second_title') ) ?></td>
		<td><?php echo string_display_links(plugin_lang_get('second_title')) ?>
			<center><b><a href="<?php echo plugin_page('title_demo') ?>"><?php echo plugin_lang_get('more') ?></a>
			</b></center>
		</td>

	</tr>
	</tr>

	<tr>
		<td class="category"><?php echo plugin_lang_get('nom_list_no_order') ?></td>
		<td><?php echo nl2br( plugin_lang_get('list_no_order') ) ?></td>
		<td><?php echo string_display_links(plugin_lang_get('list_no_order')) ?><br/>
			<center><b><a href="<?php echo plugin_page('list_demo') ?>"><?php echo plugin_lang_get('more') ?></a>
			</b></center>
		</td>
	</tr>

	<tr>
		<td class="category"><?php echo plugin_lang_get('nom_list_order') ?></td>
		<td><?php echo nl2br( plugin_lang_get('list_order') ) ?></td>
		<td><?php echo string_display_links(plugin_lang_get('list_order')) ?>
			<center><b><a href="<?php echo plugin_page('list_od_demo') ?>"><?php echo plugin_lang_get('more') ?></a>
			</b></center>
		</td>
	</tr>

	<tr>
		<td class="category"><?php echo plugin_lang_get('nom_reference') ?></td>
		<td><?php echo nl2br( plugin_lang_get('reference') ) ?></td>
		<td><?php echo string_display_links(plugin_lang_get('reference')) ?>
			<center><b><a href="<?php echo plugin_page('reference_demo') ?>"><?php echo plugin_lang_get('more') ?></a>
			</b></center>
		</td>
	</tr>

	<tr>
		<td class="category"><?php echo plugin_lang_get('nom_link') ?></td>
		<td><?php echo nl2br( plugin_lang_get('link') ) ?></td>
		<td><?php echo string_display_links(plugin_lang_get('link')) ?></td>
	</tr>

	<tr>
		<td class="category"><?php echo nl2br( plugin_lang_get('nom_image') ) ?></td>
		<td><?php echo nl2br( plugin_lang_get('image') ) ?></td>
		<td><?php echo string_display_links($image) ?></td>
	</tr>

	<tr>
		<td class="category"><?php echo plugin_lang_get('nom_bold') ?></td>
		<td><?php echo nl2br( plugin_lang_get('bold') ) ?></td>
		<td><?php echo string_display_links(plugin_lang_get('bold')) ?></td>
	</tr>

	<tr>
		<td class="category"><?php echo plugin_lang_get('nom_italic') ?></td>
		<td><?php echo nl2br( plugin_lang_get('italic') ) ?></td>
		<td><?php echo string_display_links(plugin_lang_get('italic')) ?></td>
	</tr>

	<tr>
		<td class="category"><?php echo plugin_lang_get('nom_code') ?></td>
		<td><?php echo nl2br( plugin_lang_get('code') ) ?></td>
		<td><?php echo string_display_links(plugin_lang_get('code')) ?>
			<center><b><a href="<?php echo plugin_page('code_demo') ?>"><?php echo plugin_lang_get('more') ?>
			</a></b></center>
		</td>
	</tr>
	
	<tr>
		<td class="category"><?php echo plugin_lang_get('nom_HorizontalRule') ?></td>
		<td><?php echo nl2br( plugin_lang_get('HorizontalRule') ) ?></td>
		<td><?php echo string_display_links(plugin_lang_get('HorizontalRule')) ?>
			<center><b><a href="<?php echo plugin_page('horizontalrule_demo') ?>"><?php echo plugin_lang_get('more')?>
			</a></b></center>	
		</td>
	</tr>

	<tr>
		<td class="category"><?php echo plugin_lang_get('nom_table') ?></td>
		<td><?php echo nl2br( plugin_lang_get('table') ) ?></td>
		<td><?php echo string_display_links(plugin_lang_get('table')) ?>
			
			<center><b><a href="<?php echo plugin_page('table_demo') ?>"><?php echo plugin_lang_get('more')?>
			</a></b></center>	
			 
		</td>
	</tr>
	

</table>
<?php
html_page_bottom1( );