<?php
html_page_top1( plugin_lang_get( 'title' ) );
echo '<link rel="stylesheet" type="text/css" href="' . plugin_file("style.css") . '"/>';
html_page_top2( );

?>
<table id="guide">
	<tr>
		<th colspan=3 class="title">
			<?php echo plugin_lang_get('list_no_order_nom') ?>
		</th>
	</tr>

	<tr>
		<th class="category"> <?php echo plugin_lang_get('desc') ?></th>
		<th class="category"> <?php echo plugin_lang_get('use') ?></th>
		<th class="category"> <?php echo plugin_lang_get('result') ?></th>
	</tr>

	<tr>
		<td class="category"><?php echo plugin_lang_get('list_no_order_desc_one') ?></td>
		<td><?php echo nl2br( plugin_lang_get('list_no_order_more_one') ) ?></td>
		<td><?php echo string_display_links(plugin_lang_get('list_no_order_more_one')) ?></td>
	</tr>

	<tr>
		<td class="category"><?php echo plugin_lang_get('list_no_order_desc_two') ?></td>
		<td><?php echo nl2br( plugin_lang_get('list_no_order_more') ) ?></td>
		<td><?php echo string_display_links(plugin_lang_get('list_no_order_more_two')) ?></td>
	</tr>

	<tr>
		<th colspan=3 class="title">
			<a href="<?php echo $_SERVER['HTTP_REFERER']; ?>"><?php echo plugin_lang_get('button') ?></a>
		</th>
	</tr>
	
</table>




<?php
html_page_bottom1( );