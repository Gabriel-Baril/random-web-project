<?php
	echo("<script type='text/javascript'>
			window.onload = function(){
			 	$(function(){
			 		function loadImg(url,qSelector,cssObj = {}){
			 			let image = document.createElement('IMG');
			 			image.src = url;
			 			if(image && image.style){
				 			for(let property in cssObj)
				 				if(image.style.hasOwnProperty(property))
				 					image.style[property] = cssObj[property];
			 				document.querySelector(qSelector).appendChild(image);
			 				return true;
			 			} else {
			 				console.err('loading failed');
			 				return false;
			 			}
			 		}
				 	$('.header-link').each(function(index, element){
				 		$(element).attr('id', 'header-link-' + (index + 1));
				 		console.log('in');
				 	});
				 	$('.left-box-link').each(function(index, element){
				 		$(element).attr('id', 'left-box-link-' + (index + 1));
				 	});
				 	loadImg('".GENERIC_HOME_ICON_PNG."','#header-link-1',{width: '32px',height:'32px',position:'relative',top:'9px'});
			 	});
			 };
			 </script>");

?> 