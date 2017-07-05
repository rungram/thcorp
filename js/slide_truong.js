



$(document).ready(function(){
	setInterval('imageload()',10000);
	
});

function imageload(){
	var curimage = $('#nav1 li.current');
	var nextimage = curimage.next();
	
	if(nextimage.length == 0)
	{
		nextimage = $('#nav1 li:first');
	}
	
	curimage.css({opacity:1}).removeClass('current').addClass('cur').animate({opacity:0},2000);
	nextimage.css({opacity:0}).addClass('current').animate({opacity:1},2000).removeClass('cur');
};