<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Yanamy Login</title>
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/main.css">
	<script src="<?php echo base_url();?>assets/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/js/animsition.min.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>

<img src="<?php echo base_url();?>image/hp.jpg" alt="" width="100%" height="100%" class="bgHome">

  <?php echo form_open('bek_en/login', 'id="form" '); ?>
  <br><br><br>
    <span style="color:white !important" class="animsition " data-animsition-out-class="zoom-out-sm"> <?php echo validation_errors(); ?> </span>
    <span style="color:white !important" class="animsition " data-animsition-out-class="zoom-out-sm"> <?= $this->session->flashdata('error'); ?><br></span>
    <input type="text" name="name" class="animsition" data-animsition-in-class="zoom-in-lg"><br><br>
    <input type="password" name="password" class="animsition" data-animsition-in-class="zoom-in-lg"><br><br>
    <input type="submit" name="submit" value="Login" class="animsition " data-animsition-out-class="zoom-out-sm">
 <?php form_close(); ?>
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

</script>	
</body>

</html>