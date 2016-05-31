<?php
html_page_top1( plugin_lang_get( 'title' ) );
echo '<link rel="stylesheet" type="text/css" href="' . plugin_file("style.css") . '"/>';
html_page_top2( );

?>
<table id="guide">
	<tr>
		<th colspan=3 class="title">
			<a href="<?php echo plugin_page('guide') ?>"><?php echo plugin_lang_get('guide_more') ?></a>
		</th>
	</tr>

	<tr>
		<th class="category"> <?php echo plugin_lang_get('option') ?></th>
		<th class="category"> <?php echo plugin_lang_get('use') ?></th>
		<th class="category"> <?php echo plugin_lang_get('result') ?></th>
	</tr>

	<tr>
		<td class="category"><?php echo plugin_lang_get('nom_HorizontalRule') ?></td>
		<td><?php echo nl2br( plugin_lang_get('HorizontalRule') ) ?></td>
		<td><?php echo string_display_links(plugin_lang_get('HorizontalRule')) ?></td>
	</tr>

	<tr>
		<td class="category"></td>
		<td><?php echo nl2br( plugin_lang_get('HorizontalRule_more_one') ) ?></td>
		<td><?php echo string_display_links(plugin_lang_get('HorizontalRule_more_one')) ?></td>
	</tr>

	<tr>
		<td class="category"></td>
		<td><?php echo nl2br( plugin_lang_get('HorizontalRule_more_two') ) ?></td>
		<td><?php echo string_display_links(plugin_lang_get('HorizontalRule_more_two')) ?></td>
	</tr>
	
</table>




<?php
html_page_bottom1( );