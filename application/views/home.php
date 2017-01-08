<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Yanamy Home</title>
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/main.css"">
	<script src="<?php echo base_url();?>assets/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/js/animsition.min.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>
<img src="<?php echo base_url();?>image/hp.jpg" alt="" width="100%" height="100%" class="bgHome">
<div class="menu">
	<div class="animsition">
	    <a
		  href="me/about"
		  class="animsition-link"
		  data-animsition-out-class="fade-out-right"
		  data-animsition-out-duration="2000"
		>
		 Me
		</a>

		<a
		  href="me/skill"
		  class="animsition-link"
		  data-animsition-out-class="fade-out-right"
		  data-animsition-out-duration="2000"
		>
		 Skill
		</a>

		<a
		  href="me/project"
		  class="animsition-link"
		  data-animsition-out-class="fade-out-right"
		  data-animsition-out-duration="2000"
		>
		 Project
		</a>

		<a
		  href="http://www.linkedin.com/in/yana-mulyana-42b8a9129" target="_blank"
		  class="animsition-link"
		  data-animsition-out-class="fade-out-right"
		  data-animsition-out-duration="2000"
		>
		 Resume
		</a>

		<a
		  href="me/contact"
		  class="animsition-link"
		  data-animsition-out-class="fade-out-right"
		  data-animsition-out-duration="2000"
		>
		 Contact
		</a>
    </div>

   <footer>
   	    <p  
   	      class="animsition"
		  data-animsition-out-class="fade-out-right"
		  data-animsition-out-duration="2000"
		  >
		  Bandung &lt/354&gt</p>
   </footer>

  <script>
  $(document).ready(function() {
   $(".animsition").animsition({
    inClass: 'zoom-in-lg',
    outClass: 'zoom-out-lg',
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