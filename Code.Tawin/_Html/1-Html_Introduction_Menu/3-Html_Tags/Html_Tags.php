<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/_PATH.php');
	echo "<link rel='stylesheet' type='text/css' href='".HTML_HTML_TAGS_CSS."'/>";
	$section_dependencies = ROOT.HTML_DEPENDENCIES_PHP;
	$header_php = ROOT.HTML_HEADER_PHP;
	$content_php = ROOT.HTML_HTML_TAGS_CONTENT_PHP;
	$Left_Container_php = ROOT.HTML_LEFT_CONTAINER_PHP;
	$title = 'Html Tags';
	$footer_php = ROOT.HTML_FOOTER_PHP;
	$prev_link = HTML_BASICS_PHP;
	$next_link = HTML_ATTRIBUTE_PHP; 
	$prev_link_name = 'Basics';
	$next_link_name = 'Html Tags';
	include(ROOT.HTML_SKELETON_PHP);
?>