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
	$('body').css('overflow-y', 'visible');
	$('nav').css({
		"opacity":"0",
		"z-index":"5",
	}).show().animate({opacity:1})
	$('.section-overlay').css({
		"opacity":"1",
		"z-index":"0",
	}).show().animate({opacity:0})
	$('.player-btn').css({
		"opacity":"0",
	}).show().animate({opacity:1})
	document.getElementById("track").play();
})

//play pause
jQuery(document).ready(function() {
  var playing = false;

  jQuery("#play-pause").click(function() {
    jQuery(this).toggleClass("down");

    if (playing == true) {
      document.getElementById("track").play();
      playing = false;
      $('.fa').removeClass('fa-play');
      $('.fa').addClass('fa-pause');
    } else {
      document.getElementById("track").pause();
      playing = true;
      $('.fa').removeClass('fa-pause');
      $('.fa').addClass('fa-play');
    }
  });
});

// countdown timer
function makeTimer() {

//		var endTime = new Date("29 April 2018 9:56:00 GMT+01:00");	
	var endTime = new Date("20 February 2022 6:00:00 GMT+07:00");			
		endTime = (Date.parse(endTime) / 1000);

		var now = new Date();
		now = (Date.parse(now) / 1000);

		var timeLeft = endTime - now;

		var days = Math.floor(timeLeft / 86400); 
		var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
		var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
		var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

		if (hours < "10") { hours = "0" + hours; }
		if (minutes < "10") { minutes = "0" + minutes; }
		if (seconds < "10") { seconds = "0" + seconds; }

		$("#days").html(days);
		$("#hours").html(hours);
		$("#minutes").html(minutes);
		$("#seconds").html(seconds);		

}
setInterval(function() { makeTimer(); }, 1000);

// siple lightbox
$('.imglightbox').simpleLightbox();

$('.lightBoxVideoLink').simpleLightbox();

// clipboard
function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
  alert('Berhasil Di Salin');
}

// reservasi
jQuery(function ($) {
	$(document).on('click', '#btn-reservasi', function(e){
		let nama = $("[name=nama]").val();
		let jumlah = $("[name=jumlah]").val();
		let kehadiran = $('input[name="konfirmasi"]:checked').val();

		if (nama != '' && jumlah != '' && kehadiran != '') {
			var url = 'https://wa.me/6283166745857?text=Hai, Putri dan Agus, saya ' + nama + ' ingin menginformasikan kehadiran di acara resepsi pernikahan pada Hari Minggu, 20 Februari 2022. ' + kehadiran + ' bersama ' + jumlah + ' orang. Terima kasih ya'; 
	      window.open(url, '_blank');
		}
	
	})

})

// aos
AOS.init();