
<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/_PATH.php');
	echo "<link rel='stylesheet' type='text/css' href='".HTML_BASICS_CSS."'/>";
	$section_dependencies = ROOT.HTML_DEPENDENCIES_PHP;
	$header_php = ROOT.HTML_HEADER_PHP;
	$content_php = ROOT.HTML_BASICS_CONTENT_PHP;
	$Left_Container_php = ROOT.HTML_LEFT_CONTAINER_PHP;
	$title = 'Basics';
	$footer_php = ROOT.HTML_FOOTER_PHP;
	$prev_link = HTML_INTRODUCTION_PHP;
	$next_link = HTML_HTML_TAGS_PHP; 
	$prev_link_name = 'Introduction';
	$next_link_name = 'Html Tags';
	include(ROOT.HTML_SKELETON_PHP);
?>