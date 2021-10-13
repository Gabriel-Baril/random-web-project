 <!DOCTYPE html>
 <?php include_once($_SERVER['DOCUMENT_ROOT'].'/_PATH.php'); ?>

 <html>
 	<head>
 		<?php
 			include(ROOT.GENERIC_GENERIC_DEPENDENCIES_PHP);
 			include($section_dependencies);
 			include(ROOT.GENERIC_LOAD_GENERIC_JS);
 		?>
 	</head>
 	<body>
		<?php 
			if(file_exists($header_php)){
				include($header_php);
				echo "<script> console.log('PHP : ".$header_php." has loaded succesfully'); </script>";
			} else {
				include(ROOT.GENERIC_HEADER_PHP);
				echo "<script> console.log('PHP : ".$header_php." does not exist : to replace the generic header is loaded'); </script>";
			}
		?>
		<div id='main-container'>
			<?php include($Left_Container_php); ?>
			<div id='content-container'>
				<div id='header-content-container'>
					<?php echo "<h1 id='main-content-subject-title'>".$title."</h1>" ?>
					<div id='header-content-link-container'>
						<?php
							echo "<a href='".$prev_link."' class='content-nav' id='content-prev'><p>".'◀ '.$prev_link_name."</p></a>";
							echo "<a href='".$next_link."' class='content-nav' id='content-next'><p>".$next_link_name.' ▶'."</p></a>";
						?>
					</div>
				</div>
				<hr/>
					<div id='content'>
						<?php
							if(isset($content_php))
								include($content_php);
							else
								echo "<p>NO CONTENT : The file doesnt exists</p>";
						?>
					</div>
				<hr/>
				<?php
					if(file_exists($footer_php)){
						include($footer_php);
						echo "<script> console.log('PHP : ".$footer_php." has loaded succesfully'); </script>";
					} else {
						include(ROOT.GENERIC_FOOTER_PHP);
						echo "<script> console.log('PHP : ".$footer_php." does not exist : to replace the generic header is loaded'); </script>";
					}
				?>
			</div>
 		</div>
 	</body>
 </html>