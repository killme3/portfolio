<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Yanamy Skill</title>
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/main.css">
	<script src="<?php echo base_url();?>assets/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/js/animsition.min.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>

<img src="<?php echo base_url();?>image/hp.jpg" alt="" width="100%" height="100%" class="bgHome">

	<div class="button">Menu</div>
	<a href="contact" class="animsition-link menutop" data-animsition-in-class="zoom-in-sm">Contact</a>
	<a href="project" class="animsition-link menutop" data-animsition-in-duration="1000">Project</a>
	<a href="skill" class="animsition-link menutop" data-animsition-out-class="zoom-out-sm">Skill</a>
	<a href="about" class="animsition-link menutop" data-animsition-out-duration="800">Me</a>
	<a href="<?php echo base_url();?>" class="animsition-link menutop" data-animsition-out-duration="800">Home</a>

<div class="content">
	<div class="animsition" data-animsition-in-class="zoom-in-lg">
		<h1>Skill</h1>
	</div>

	<div class="animsition " data-animsition-out-class="zoom-out-sm">
		<h3>PHP - Codeigniter - jQuery - HTML - MySQL - AJAX - CSS -BOOTSTRAP</h3>
		<p style="text-align:center;color:white">"  I'm not expert but still advanced and i'm very ready to learn and upgrade my skill. "</p>
		<p style="text-align:center;color:white">" Percentage all of my skill are medium. "</p>
	</div>

	

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