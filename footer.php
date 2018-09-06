<div id= "ttr_footer">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<html>
<head>
<style>
#footer a {
    color: #ffffff;
	
    text-decoration: none !important;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}


.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: left;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;

  .fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}
}
</style>

<div class="container"><div class="col">
  
  <div class="centered clearfix">
    <div class="footer-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/bake.png" alt="Logo" width="150" height="100" /> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <a href="#" class="fa fa-facebook"></a>
	  <a href="#" class="fa fa-twitter"></a>
	  <a href="#" class="fa fa-google"></a>
	  <a href="#" class="fa fa-linkedin"></a>
	  <a href="#" class="fa fa-youtube"></a>
      <a href="#" class="fa fa-instagram"></a>
	  <a href="#" class="fa fa-pinterest"></a>
	  </div>
	  </div>
	  </head>
	  </html>

<?php wp_footer(); ?>

<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bakers' ) ); ?>">
				
			</a>
			
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'bakers' ), 'bakers', '<a>Jahanvi Parmar</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->




</body>
</html>
