// modal autoload
$(window).on('load', function() {
	$('#protokol').modal('show');
	if ( $('body').hasClass('modal-open') ) {
		$('.section-overlay').css('z-index','1');        
	};
});

$('[data-bs-dismiss="modal"]').click(function(){
	$('.section-overlay').css('z-index','10000');
})

// fix scroll auto up
$(document).ready(function () {
	$('html, body').animate({
		scrollTop: $('#beranda').offset().top
	}, 'slow');
});

// buka undangan
$('body').css('overflow', 'hidden');
// $('nav').css('display','none');
$('#buka-undangan').click(function(){
	$('body').css('overflow', 'visible');
	$('nav').css({
		"opacity":"0",
		"z-index":"1",
	}).show().animate({opacity:1})
	$('.section-overlay').css({
		"opacity":"1",
		"z-index":"0",
	}).show().animate({opacity:0})
})