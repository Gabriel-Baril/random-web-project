let page_data =	{
	root: 'CODE.TAWIN',
	section: 'Welcome',
	type: 'Tutorial',
	sub_section: 'Introduction',
	prev_page: null
}


window.onload = function(){
	$(function(){
		let element = document.createElement('P')
		element.appendChild(document.createTextNode('◀ Prev'))
		document.getElementById('content-prev').appendChild(element);

		let element2 = document.createElement('P')
		element2.appendChild(document.createTextNode('Next ▶'))
		document.getElementById('content-next').appendChild(element2);

		$('.left-box-link').each(function(index,element){
			$(element).attr('id', $(element).attr('class') + '-' + index)
		});
		$('.header-link').each(function(index,element){
			$(element).attr('id', $(element).attr('class') + '-' + index)
		});
	});
}