<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/css/animsition.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/sweetalert/sweetalert2/dist/sweetalert2.min.css">
  <script src="<?php echo base_url();?>assets/jquery.js"></script>
  <script src="<?php echo base_url();?>assets/sweetalert/es6-promise/dist/es6-promise.min.js"></script>
	<script src="<?php echo base_url();?>assets/sweetalert/sweetalert2/dist/sweetalert2.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/js/animsition.min.js" type="text/javascript" charset="utf-8" async defer></script>
  <style>
   
  </style>
</head>
<body>

<img src="<?php echo base_url();?>image/hp.jpg" alt="" width="100%" height="100%" class="bgHome">

	<div class="button">Menu</div>
	<a href="contact" class="animsition-link menutop" data-animsition-in-class="zoom-in-sm">Contact</a>
	<a href="project" class="animsition-link menutop" data-animsition-in-duration="1000">Project</a>
	<a href="skill" class="animsition-link menutop" data-animsition-out-class="zoom-out-sm">Skill</a>
	<a href="about" class="animsition-link menutop" data-animsition-out-duration="800">Me</a>
	<a href="<?php echo base_url();?>" class="animsition-link menutop" data-animsition-out-duration="800">Home</a>

	<div class="animsition" data-animsition-in-class="zoom-in-lg">
		<h1>Contact Me</h1>
	</div>

	<div class="animsition " data-animsition-out-class="zoom-out-sm">
    	<h3><a href="http://www.linkedin.com/in/yana-mulyana-42b8a9129" target="_blank" class="contactme">LinkedIn</a> or Email requiem_murder@yahoo.com</h3>
	</div>

  <?php echo form_open('', 'id="form" '); ?>
    <span style="color:white !important" class="animsition " data-animsition-out-class="zoom-out-sm"> <?php echo validation_errors(); ?> </span>
    <input id="name" type="text" name="name" placeholder="Your Name" class="animsition" data-animsition-in-class="zoom-in-lg"><br><br>
    <input id="email" type="email" name="email" placeholder="Your Email" class="animsition" data-animsition-in-class="zoom-in-lg"><br><br>
    <textarea id="area" type="text" name="text" placeholder="Your Text" rows="5" class="animsition" data-animsition-in-class="zoom-in-lg"></textarea><br><br>
    <input type="submit" name="submit" value="SEND" class="animsition " data-animsition-out-class="zoom-out-sm">
 <?php form_close(); ?>

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
      localStorage['firstLoad'] = true;
      window.location.reload();
    }  
    else
      localStorage.removeItem( 'firstLoad' );
  }
})();


$(document).ready(function(){
  $('#form').on('submit',function(e) {  
      var name = $('#name').val();
      var email= $('#email').val();
      var area = $('#area').val();
      if (name.trim() === '') {
        swal(
            'Whoupss',
            'Your Name cannot empty..',
            'error'
            );
      } else if (email.trim() === '') {
        swal(
            'Whoupss',
            'Your Email cannot empty..',
            'error'
            );
      } else if (area.trim() === '') {
        swal(
            'Whoupss',
           'Your Text cannot empty..',
            'error'
            );
      } else{
        $.ajax({
          url:'<?= base_url()?>me/contact', 
          data:$(this).serialize(),
          type:'POST',
          success:function(){
            swal(
              'Success..',
              'Thank you for your interest',
              'success'
            );
          }
        });
      }
   
    e.preventDefault(); 
    $('input:text').val('');
    $('#email').val('');
    $('#area').val('');
    $('input:text').focus();
  });
});
</script>	
</body>

</html>