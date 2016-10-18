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

	<?php
        $cats = get_the_category();
        $cat_name = $cats[0]->name;
        $cat_slug_name = $cats[0]->slug;
    ?>

	<div class="single-header-bg <?php echo $cat_slug_name; ?>">
		<header class="entry-header">		

			<!-- Author Image -->
			<div class="author-image author-image-margin">
			 	<?php echo get_avatar( get_the_author_meta('email'), '68' ); ?>
			</div>

			<!-- Posted Meta -->
			<div class="entry-meta">
				<?php understrap_posted_on(); ?>
			</div><!-- .entry-meta -->

	        <div class="post-category">
			 	#<?php echo $cat_name; ?>
			</div>

			<!-- Blog Title -->
			<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

			

			<?php
				$args = array( 'posts_per_page' => 2, 'order'=> 'ASC', 'category_name'=> $cat_name );
				$postslist = get_posts( $args );
			?>

			<div class="container" style="">
			  <div class="row">
				<!--<div class="main-content-right col-md-12">				
				<?php foreach ( $postslist as $post ) : setup_postdata( $post ); ?>		  
				  <div class="post-tags"><?php the_tags('', ' ', ''); ?></div>
				  <?php endforeach; 
				  wp_reset_postdata();
				?>
				</div>-->
				<div class="main-content-right col-md-12">
					<?php $tags_list = get_the_tag_list( '', __( ' ', 'understrap' ) ); ?>
					<div class="post-tags"><?php echo $tags_list; ?></div>					
				</div>

				</div>
			</div>


		</header><!-- .entry-header -->
	</div>


<!-- getting post id for thumbnail -->
     <?php $postID = $post->ID ?>
<!-- end getting post id for thumbnail -->    
     
	
	<div class="entry-content container">

<!-- Important- logic to show related post and tags- so do not remove it -->

		<?php
			//$args = array( 'posts_per_page' => 2, 'order'=> 'ASC', 'category_name'=> $cat_name );
			//$postslist = get_posts( $args );
		?>

		<!-- <div class="main-content-right col-md-3">
			<div class="post-tags-caption">Tags</div>
			<?php foreach ( $postslist as $post ) : setup_postdata( $post ); ?>		  
			  <div class="post-tags"><?php the_tags('', ' ', ''); ?></div>
			  <?php endforeach; 
			  wp_reset_postdata();
			  ?>
		</div> -->
		<div class="main-content-right col-md-2"></div>
		<div class="main-content-right col-md-8">

			<div class="post-image"><?php echo get_the_post_thumbnail( $postID, 'large' ); ?> </div>

			<?php the_content(); ?>
			
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .main-content-right -->
		<div class="main-content-right col-md-2"></div>
	</div><!-- .entry-content -->

	<!-- <footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer> -->
	<!-- .entry-footer -->

</article><!-- #post-## -->


<!-- Related Post -->
<!-- <div class="related-article-container"><span class="related-article">Related Articles</span></div> -->
<div class="related-article container">
	<h3 class="related-article-head">
		Related Articles
	</h3>
	<div class="related-article-content">
		<div class="row">
			<?php 
				foreach ( $postslist as $post ) :
					setup_postdata( $post); ?> 	
					<div class="col-sm-12 col-md-6">
						<?php //the_date(); ?>
						<div class="related-post <?php echo $cat_slug_name; ?>">
						 	<a href="<?php the_permalink(); ?>">#<?php echo $cat_name; ?></a>
						</div>  
						<?php
							// $title = get_the_title();
							// $short_title = substr(strip_tags($title), 0, 35);
							// $short_title = strlen($title) > 35 ? substr($short_title, 0, 35)."..." : $title;				
							// echo '<h2><a class="related-post-title" href="' . get_permalink() . '" rel="bookmark">'.$short_title.'</a></h2>';
						?>
						<!-- <h2 class="related-post-title"><?php the_title(); ?></h2> -->		
						<h2><a class="related-post-title" href="<?php the_permalink(); ?>" rel="bookmark"> <?php the_title(); ?> </a></h2>
						<div class="related-post-content"><?php echo get_excerpt(); ?></div>
					</div>
			<?php
			endforeach; 
			wp_reset_postdata();
			?>
		</div>
	</div>
</div>


<!-- End Related Post -->
