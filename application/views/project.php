<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Yanamy Project</title>
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/main.css"">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bxslider/jquery.bxslider.css">
	<script src="<?php echo base_url();?>assets/jquery.js"></script>
	<script src="<?php echo base_url();?>assets/bxslider/jquery.bxslider.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/js/animsition.min.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>

<img src="<?php echo base_url();?>image/hp.jpg" alt="" width="100%" height="100%" class="bgHome">

	<div class="button">Menu</div>
	<a href="contact" title=""  class="animsition-link menutop" data-animsition-in-class="zoom-in-sm">Contact</a>
	<a href="project" title=""  class="animsition-link menutop" data-animsition-in-duration="1000">Project</a>
	<a href="skill" title=""  class="animsition-link menutop" data-animsition-out-class="zoom-out-sm">Skill</a>
	<a href="about" title=""  class="animsition-link menutop" data-animsition-out-duration="800">Me</a>
	<a href="<?php echo base_url();?>" title=""  class="animsition-link menutop" data-animsition-out-duration="800">Home</a>

<div class="content">
	<div class="animsition" data-animsition-in-class="zoom-in-lg">
		<h1>Project</h1>
	</div>

	<div class="animsition " data-animsition-out-class="zoom-out-sm">
		<p style="text-align:center;color:white" class="desc">" So what i've done with my skill, for now i've finished project web based booking application at Hola cafe Bandung and of course this Portfolio.  "</p>
	</div>
</div>

<div class="bingkai animsition" data-animsition-in-class="zoom-in-lg">
	<ul class="bxslider" >
	  <li><img src="<?php echo base_url();?>image/project/awal.png" style="height:auto !important"/></li>
	  <li><img src="<?php echo base_url();?>image/project/daftra_produk.png" style="height:auto !important"/></li>
	  <li><img src="<?php echo base_url();?>image/project/data_pelanggan.png" style="height:auto !important"/></li>
	  <li><img src="<?php echo base_url();?>image/project/history.png" style="height:auto !important"/></li>
	  <li><img src="<?php echo base_url();?>image/project/index_pesan.png" style="height:auto !important"/></li>
	  <li><img src="<?php echo base_url();?>image/project/pesanan.png" style="height:auto !important"/></li>
	</ul>

</div>

<script>
$(document).ready(function() {
  $(".animsition").animsition({
    inClass: 'flip-in-y-fr',
    outClass: 'flip-out-y-fr',
    inDuration: 1500,
    outDuration: 800,
    linkElement: '.animsition-link',
    loading: true,
    loadingParentElement: 'body',
    loadingClass: 'animsition-loading',
    loadingInner: '',
    timeout: false,
    timeoutCountdown: 5000,
    onLoadEvent: true,
    browser: [ 'animation-duration', '-webkit-animation-duration'],
    overlay : false,
    overlayClass : 'animsition-overlay-slide',
    overlayParentElement : 'body',
    transition: function(url){ window.location.href = url; }
  });

});

$(function(){
	$('.button').click(function(){
		$('.menutop').fadeToggle(function(){
			$('.button').text('Menu');
		});
	});
});

$('.bxslider').bxSlider({
  auto: true,
  adaptiveHeight: true,
  nextSelector: '#slider-next',
  prevSelector: '#slider-prev',
  nextText: 'Onward →',
  prevText: '← Go back'
});


(function()
{
  if( window.localStorage )
  {
    if( !localStorage.getItem( 'firstLoad' ) )
    {
      localStorage[ 'firstLoad' ] = true;
      window.location.reload();
    }  
    else
      localStorage.removeItem( 'firstLoad' );
  }
})();
</script>
</body>

</html>