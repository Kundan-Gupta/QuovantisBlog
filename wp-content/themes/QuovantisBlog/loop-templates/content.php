<?php
/**
 * @package understrap
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-xs-12 col-sm-6 col-md-4 col-lg-4 grid-view'); ?>>
    
	<header class="entry-header">
        
        <!-- Get the Slug name for styling -->
		 <?php
            $cats = get_the_category();
            $cat_slug_name = $cats[0]->slug;
            $cats_name = $cats[0]->name;
        ?>

		<div class="blog-image <?php echo $cat_slug_name ?>">
			<!-- Check if the post has a Post Thumbnail assigned to it. -->
			<?php if (has_post_thumbnail()) : ?>
				<?php the_post_thumbnail(); ?>
			<?php else : ?>
				<img alt="" 
					class="attachment-post-thumbnail size-post-thumbnail wp-post-image <?php echo $cat_slug_name ?>" >
			<?php endif; ?>
		</div>


		<div class="blog-meta">

			<?php
			    // Get the ID of a given category
			    $category_id = get_cat_ID($cats_name);
			    // Get the URL of this category
			    $category_link = get_category_link($category_id);
			?>
			
            <div class="category">
            	<!-- #<?php the_category( ' &bull; ' ); ?> -->
            	<!-- <a class="<?php echo $cat_slug_name  ?>" href="<?php get_the_permalink(); ?>">#<?php echo $cats_name; ?></a> -->
            	<a class="<?php echo $cat_slug_name  ?>" href="<?php echo esc_url( $category_link ); ?>">#<?php echo $cats_name; ?></a>
            </div>
					
			<?php //the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			<?php
				$title = get_the_title();
				$short_title = substr(strip_tags($title), 0, 53);
				$short_title = strlen($title) > 53 ? substr($short_title,0,53)."..." : $title;				
				echo '<h2 class="entry-title"><a href="' . get_permalink() . '" rel="bookmark">'.$short_title.'</a></h2>';
			?>
					
			<?php if ( 'post' == get_post_type() ) : ?>

				<div class="entry-meta">
					<?php understrap_posted_on(); ?>
				</div><!-- .entry-meta -->

			<?php endif; ?>
        </div>

	</header><!-- .entry-header -->

       <?php //echo get_the_post_thumbnail( $post->ID, 'large' ); ?> 
    
		<!--<div class="entry-content">

	            <?php
	                the_excerpt();
	            ?>

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
					'after'  => '</div>',
				) );
			?>
	        
		</div>-->
		<!-- .entry-content -->

	<!--<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>
		
	</footer>-->
	<!-- .entry-footer -->
    
</article><!-- #post-## -->