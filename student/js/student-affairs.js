//Student Affairs Custom JavaScript Document

$(document).ready(function(){

	// Target your .container, .wrapper, .post, etc.
	$(".fitvids").fitVids();
	
	//auto-start carousels
	$('#home-carousel').carousel({
		interval: 5000,
		cycle: true
	});
	
	//offcanvas for responsive left sidebar
  $('[data-toggle=offcanvas]').click(function() {
    $('.row-offcanvas').toggleClass('active');
  });
  
	//dropdown
	$('.dropdown-toggle').dropdown();
  	  
});


//webkit fix - browser redraw for nav display
$('nav.navbar .nav > li').hide();
$('nav.navbar .nav > li').get(0).offsetHeight; // no need to store this anywhere, the reference is enough
$('nav.navbar .nav > li').show();

window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);
 
  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };
 
  return t;
}(document, "script", "twitter-wjs"));
