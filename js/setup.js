$(document).ready( function(){
	$('#slideshowHolder').jqFancyTransitions({ 
    effect: 'zipper', // wave, zipper, curtain
width: 800, // width of panel
height: 300, // height of panel
strips: 20, // number of strips
delay: 5000, // delay between images in ms
stripDelay: 20, // delay beetwen strips in ms
titleOpacity: 0.7, // opacity of title
titleSpeed: 1000, // speed of title appereance in ms
position: 'top', // top, bottom, alternate, curtain
direction: 'fountainAlternate', // left, right, alternate, random, fountain, fountainAlternate
navigation: true, // prev and next navigation buttons
links: false // show images as links

	});
});