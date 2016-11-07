document.getElementById('menu-item-28').innerHTML = '<a target="_blank" href="https://www.facebook.com/pages/Ace-High-Barber-Shop/929477850407369?fref=ts"><i class="fa fa-facebook-square"></i></a>';
document.getElementById('menu-item-30').innerHTML = '<a target="_blank" href="https://twitter.com/Acehighbarbersh"><i class="fa fa-twitter-square"></i></a>';
document.getElementById('menu-item-29').innerHTML = '<a target="_blank" href="https://instagram.com/acehighbarbershop/"><i class="fa fa-instagram"></i></a>';
document.getElementById('menu-item-31').innerHTML = '<a target="_blank" href="https://plus.google.com/108460875725473168531/about"><i class="fa fa-google-plus-square"></i></a>';

jQuery(function($) {

	$('#services h3').add('<hr class="double-line" /><hr class="single-line" />').prependTo('#services');
	$('#about h3').add('<hr class="double-line" /><hr class="single-line" />').prependTo('#about');
	$('#press h3').add('<hr class="double-line" /><hr class="single-line" />').prependTo('#press');
	$('#contact h3').add('<hr class="double-line" /><hr class="single-line" />').prependTo('#contact');

	// if ($(window).width() < 1024) {
 //    	$('li.home a.home-logo img').replaceWith('Home');
	// }
});