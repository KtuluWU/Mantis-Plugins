<?php

$p_file_content = file_get_contents(plugin_file_path('scrolltotop.css', plugin_get_current()));
$p_arrow_url = plugin_file('arrow.svg');

$p_file_content = str_replace("%arrow_url%", $p_arrow_url, $p_file_content);


header( 'Content-Type: text/css');
echo $p_file_content;

?>