<?php
/**
 * @package understrap
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if (has_post_thumbnail()) : ?>
		<?php //the_post_thumbnail(); ?>
	<?php else : ?>
		
	<?php endif; ?>

	<div class="single-header-bg">
		<header class="entry-header">
			<?php
	            $cats = get_the_category();
	            $cat_name = $cats[0]->name;
	            $cat_slug_name = $cats[0]->slug;
	        ?>
	        <div class="post-category">
			 	#<?php echo $cat_name; ?>
			 </div>
			<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
			<div class="author-image">
			 	<?php echo get_avatar( get_the_author_meta('email'), '68' ); ?>
			 </div>

			<div class="entry-meta">

				<?php understrap_posted_on(); ?>

			</div><!-- .entry-meta -->

		</header><!-- .entry-header -->
	</div>


<!-- getting post id for thumbnail -->
     <?php $postID = $post->ID ?>
<!-- end getting post id for thumbnail -->    
     
	
	<div class="entry-content">

<!-- Important- logic to show related post and tags- so do not remove it -->
		<?php
			$args = array( 'posts_per_page' => 2, 'order'=> 'ASC', 'category_name'=> $cat_name );
			$postslist = get_posts( $args );

		?>


		<div class="main-content-right col-md-3">
			<div>Tags:</div>
			<?php foreach ( $postslist as $post ) :
			  setup_postdata( $post );
			  
			  
			  the_tags('', ', ', '');
			  endforeach; 
			?>
		</div>
		
		<div class="main-content-right col-md-9">

			<?php echo get_the_post_thumbnail( $postID, 'large' ); ?> 
			<?php the_content(); ?>
			
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .main-content-right -->
	</div><!-- .entry-content -->

	<!-- <footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer> -->
	<!-- .entry-footer -->

</article><!-- #post-## -->


<!-- Related Post -->
<!-- <div class="related-article-container"><span class="related-article">Related Articles</span></div> -->
<div class="related-article">Related Articles</div>
<div class="container nopad-left nopad-right">
	<div class="row">
		<?php 
			foreach ( $postslist as $post ) :
				setup_postdata( $post ); ?> 	
				<div class="col-sm-12 col-md-6">
					<?php //the_date(); ?>
					<div class="related-post <?php echo $cat_slug_name; ?>">
					 	#<?php echo $cat_name; ?>
					</div>  
					<h2 class="related-post-title"><?php the_title(); ?></h2>					
					<div class="related-post-content"><?php the_excerpt(); ?></div>
				</div>
		<?php
		endforeach; 
		wp_reset_postdata();
		?>
	</div>
</div>

<!-- End Related Post -->
