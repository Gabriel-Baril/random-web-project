
<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/_PATH.php');
	echo "<link rel='stylesheet' type='text/css' href='".HTML_INTRODUCTION_CSS."'/>";
	$section = 'Html';
	$section_dependencies = ROOT.HTML_DEPENDENCIES_PHP;
	$header_php = ROOT.HTML_HEADER_PHP;
	$content_php = ROOT.HTML_INTRODUCTION_CONTENT_PHP;
	$Left_Container_php = ROOT.HTML_LEFT_CONTAINER_PHP;
	$title = 'Introduction';
	$footer_php = ROOT.HTML_FOOTER_PHP;
	$prev_link = HTML_INTRODUCTION_PHP;
	$next_link = HTML_BASICS_PHP; 
	$prev_link_name = 'Introduction';
	$next_link_name = 'Basics';
	include(ROOT.HTML_SKELETON_PHP);
?>