 <?php
 	define('ROOT',$_SERVER['DOCUMENT_ROOT']);

	define('LIBRARY_PHP', '/__LIBRARY_DATA/php');

 	define('GENERIC_GENERIC_DEPENDENCIES_PHP', '/_Common/Generic/genericDependencies.php');
 	define('GENERIC_HEADER_PHP', '/_Common/Generic/Header/Header.php');
 	define('GENERIC_FOOTER_PHP', '/_Common/Generic/Footer/Footer.php');

 	define('GENERIC_HEADER_CSS', '/_Common/Generic/Header/Header.css');
 	define('GENERIC_CONTENT_CSS', '/_Common/Generic/content.css');
 	define('GENERIC_LEFT_CONTAINER_CSS', '/_Common/Generic/Left_Container.css');
 	define('GENERIC_FOOTER_CSS', '/_Common/Generic/Footer/Footer.css');

 	define('GENERIC_LOAD_GENERIC_JS','/_Common/Generic/loadGeneric.php');
 	define('GENERIC_HOME_ICON_PNG','/_Common/Generic/Images/home_icon.png');

 	define('HTML_HEADER_PHP', '/_Common/Html/Header/Header.php');
 	define('HTML_FOOTER_PHP', '/_Common/Html/Footer/Footer.php');
 	define('HTML_DEPENDENCIES_PHP', '/_Common/Html/Dependencies.php');
 	define('HTML_LEFT_CONTAINER_PHP', '/_Common/Html/Left_Container.php');

 	define('HTML_INTRODUCTION_PHP', '/_Html/1-Html_Introduction_Menu/1-Introduction/Introduction.php');
 	define('HTML_INTRODUCTION_CSS', '/_Html/1-Html_Introduction_Menu/1-Introduction/Introduction.css');
 	define('HTML_INTRODUCTION_CONTENT_PHP', '/_Html/1-Html_Introduction_Menu/1-Introduction/Content.php');

 	define('HTML_BASICS_PHP', '/_Html/1-Html_Introduction_Menu/2-Basics/Basics.php');
 	define('HTML_BASICS_CSS', '/_Html/1-Html_Introduction_Menu/2-Basics/Basics.css');
 	define('HTML_BASICS_CONTENT_PHP', '/_Html/1-Html_Introduction_Menu/2-Basics/Content.php');

 	define('HTML_HTML_TAGS_PHP', '/_Html/1-Html_Introduction_Menu/3-Html_Tags/Html_Tags.php');
 	define('HTML_HTML_TAGS_CSS', '/_Html/1-Html_Introduction_Menu/3-Html_Tags/Html_Tags.css');
 	define('HTML_HTML_TAGS_CONTENT_PHP', '/_Html/1-Html_Introduction_Menu/3-Html_Tags/Content.php');

 	define('HTML_ATTRIBUTE_PHP', '/_Html/1-Html_Introduction_Menu/4-Attribute/Attribute.php');
 	define('HTML_ATTRIBUTE_CSS', '/_Html/1-Html_Introduction_Menu/4-Attribute/Attribute.css');
 	define('HTML_ATTRIBUTE_CONTENT_PHP', '/_Html/1-Html_Introduction_Menu/4-Attribute/Content.php');

 	define('HTML_COMMENT_TAG_PHP', '/_Html/2-Html_Tags_Menu/1-Comment_Tag/Comment_Tag.php');
 	define('HTML_COMMENT_TAG_CSS', '/_Html/2-Html_Tags_Menu/1-Comment_Tag/Comment_Tag.css');
 	define('HTML_COMMENT_TAG_CONTENT_PHP', '/_Html/2-Html_Tags_Menu/1-Comment_Tag/Content.php');


	define('HTML_SKELETON_PHP', '/_Common/Html/Skeleton.php');

 	function include_if(...$includes){
 		for($i = 0;$i < count($includes);$i++){
 			if(file_exists($includes[$i])){
 				include($includes[$i]);
 				return true;
 			}
 		}
 		return false;
 	}
 ?>