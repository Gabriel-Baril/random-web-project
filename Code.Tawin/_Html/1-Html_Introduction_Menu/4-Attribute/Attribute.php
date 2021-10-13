<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/_PATH.php');
	echo "<link rel='stylesheet' type='text/css' href='".HTML_ATTRIBUTE_CSS."'/>";
	$section = 'Html';
	$section_dependencies = ROOT.HTML_DEPENDENCIES_PHP;
	$header_php = ROOT.HTML_HEADER_PHP;
	$content_php = ROOT.HTML_ATTRIBUTE_CONTENT_PHP;
	$Left_Container_php = ROOT.HTML_LEFT_CONTAINER_PHP;
	$title = 'Attributes';
	$footer_php = ROOT.HTML_FOOTER_PHP;
	$prev_link = HTML_HTML_TAGS_PHP;
	$next_link = HTML_ATTRIBUTE_PHP; 
	$prev_link_name = 'Html Tags';
	$next_link_name = 'Attributes';
	include(ROOT.HTML_SKELETON_PHP);
?>