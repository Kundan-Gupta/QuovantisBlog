
<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */
?>

<?php get_sidebar('footerfull'); ?>

<div class="wrapper-footer" id="wrapper-footer">
    
    <div class="footer-bottom-container">

		<footer class="clearfix container" id="colophon">

			<div id="footer-bottom">
				<div id="footer-bottom-inside">
							
					<!-- Get the copyright -->
					<!--<div class="left-copy">&copy; <a href="http://blogs.quovantis.com/">Humble Bits | Thoughts about product design and development</a></div>-->
					<div class="left-copy">
						<a href="http://www.quovantis.com/" target="_blank">
							<img class="footer-logo" 
								src="<?php bloginfo('template_url'); ?>/images/logo_footer.png" 
								alt="Logo_Footer">
						</a>
					</div>
					<div class="footer_right_social">
						<div class="footer-block-two">
							<div class="content">
								<a target="_blank" href="http://www.facebook.com/QuovantisTechnologies">
									<i class="fa fa-facebook"></i>
									<!-- icon -->
								</a>
								<a target="_blank" href="https://twitter.com/Quovantis">
									<i class="fa fa-twitter"></i>
									<!-- icon -->
								</a>
								<a target="_blank" href="http://www.linkedin.com/company/quovantis-technologies">
									<i class="fa fa-linkedin"></i>
									<!-- icon -->
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="float-right">
					<span class="fa fa-angle-up" id="top"></span>
				</div> -->
				<div class="float-right">
					<a class="totop" href="#"><span class="fa fa-angle-up"></span></a>
				</div>
			</div><!-- Footer bottom -->

		</footer>
        
    </div><!-- container end -->
    
</div><!-- wrapper end -->

<?php //wp_footer(); ?>