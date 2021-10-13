
<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/_PATH.php');
	echo "<link rel='stylesheet' type='text/css' href='".HTML_COMMENT_TAG_CSS."'/>";
	$section = 'Html';
	$section_dependencies = ROOT.HTML_DEPENDENCIES_PHP;
	$header_php = ROOT.HTML_HEADER_PHP;
	$content_php = ROOT.HTML_COMMENT_TAG_CONTENT_PHP;
	$Left_Container_php = ROOT.HTML_LEFT_CONTAINER_PHP;
	$title = 'La balise commentaire';
	$footer_php = ROOT.HTML_FOOTER_PHP;
	$prev_link = HTML_COMMENT_TAG_PHP;
	$next_link = '#'; 
	$prev_link_name = 'Commentaire';
	$next_link_name = 'no next';
	include(ROOT.HTML_SKELETON_PHP);
?>