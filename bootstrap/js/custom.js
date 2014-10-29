jQuery(document).ready(function($) {

/*  Toggle header search
/* ------------------------------------ */
	$('.toggle-search').click(function(){
		$('.toggle-search').toggleClass('active');
		$('.search-expand').fadeToggle(250);
            setTimeout(function(){
                $('.search-expand input').focus();
            }, 300);
	});
	
/*  Scroll to top
/* ------------------------------------ */
	$('a#back-to-top').click(function() {
		$('html, body').animate({scrollTop:0},'slow');
		return false;
	});
	});

//masonry
var container = document.querySelector('.container');
var msnry = new Masonry( container, {
  itemSelector: '.col-md-4.column',
  columnWidth: '.col-md-4.column',                
});  