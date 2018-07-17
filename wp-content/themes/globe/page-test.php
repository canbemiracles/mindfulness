<?php /* Template Name: Booking */?>
<?php get_header(); ?>
<div class='section' id="first" style="height: 100vh">
<?php echo get_custom_logo(); ?>
	<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		the_content();
	} // end while
} // end if
?>
</div>
<div class='section'>
 <iframe id="ifr" src="http://qtwetyqe.test:81/globe" width="1920" height="947" >
    Ваш браузер не поддерживает плавающие фреймы!
 </iframe>
</div>
<?php get_footer(); ?>