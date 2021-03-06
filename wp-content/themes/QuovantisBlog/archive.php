<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header(); ?>

<div class="wrapper" id="archive-wrapper">

    <div  id="content" class="<?php if(is_category() || is_archive()){ ?> container-fluid <?php } else { ?> container <?php } ?>">

        <div class="row">
            <?php
                $cats = get_the_category();
                $cat_name = $cats[0]->name;
                $cat_slug_name = $cats[0]->slug;
                $cat_id = get_cat_ID($cat_name);
            ?>
             <div class="category-image-container <?php echo $cat_slug_name; ?>">
                <div class="category-header-bg">

                    <div class="header-post container">
                        <div class="caption">
                            <header class="entry-header">
                                
                                <?php if(is_category()) : ?>
                                    <div class="post-category">
                                        <!-- #<?php echo $cat_name; ?> -->                                    
                                        <a class="header-category <?php echo $cat_slug_name  ?>" href="<?php echo esc_url( $category_link ); ?>">#<?php echo $cat_name; ?></a>
                                    </div>


                                    <?php
                                        // $args = array( 'posts_per_page' => 1, 'category_name'=> $cat_name );
                                        $args = array( 'posts_per_page' => 1, 'slug_name'=> $cat_slug_name );
                                        $postslist = get_posts( $args );
                                        foreach ( $postslist as $post ) : setup_postdata( $post );
                                        wp_reset_postdata();
                                    ?>
                                    <?php
                                        $title = get_the_title();
                                        $short_title = substr(strip_tags($title), 0, 53);
                                        $short_title = strlen($title) > 53 ? substr($short_title,0,53)."..." : $title;              
                                        echo '<h2 class="entry-title"><a class="title" href="' . get_permalink() . '" rel="bookmark">'.$short_title.'</a></h2>';
                                    ?>

                                    <div class="entry-meta">
                                        <span class="byline communication">
                                            <span class="posted-by">By</span>
                                            <span class="author vcard <?php echo $cat_slug_name; ?>">
                                                <a class="published-on author-name" href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' ) ) ?>" rel="bookmark"><?php the_author(); ?></a>
                                            </span>
                                        </span>
                                        <span class="posted-on"> /  
                                            <a rel="bookmark" href="<?php get_permalink() ?>" class="published-on">
                                                <time class="entry-date published" datetime="%1$s"><?php the_date('jS M Y'); ?></time>
                                            </a>
                                        </span>
                                    </div>
                                    <?php endforeach; 
                                      wp_reset_postdata();
                                    ?>
                                 <?php else : ?>
                                    <div class="tag-name">#<?php single_tag_title(); ?> </div>
                                <?php endif; ?>
                                <?php //understrap_posted_on(); ?>

                            </header><!-- .entry-header -->
                        </div>
                    </div>

                </div>
            </div>
        
    	    <!--<div id="primary" class="<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?> content-area">-->
            <div id="primary" class="content-area container">
               <div class="row">
                    <main id="main" class="site-main" role="main">




                       <?php
                            // $show_posts = new WP_Query( array(
                            //     'offset'            => 1,
                            //     'category_name'     => $cat_name,
                            //     'order'             => 'ASC',
                            //  ) );
                            
                            
                            if ( have_posts() ) : while ( have_posts() ) : the_post();

                                /* Include the Post-Format-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                 */
                                get_template_part( 'loop-templates/content', get_post_format() );
                            ?>

                            <?php endwhile; ?>

                            <?php //the_posts_navigation(); ?>

                            <?php else : ?>

                                <?php get_template_part( 'loop-templates/content', 'none' ); ?>

                            <?php endif; 
                             wp_reset_postdata();
                            ?>
                    </main><!-- #main -->
                </div>
                
                <?php 
                    
                    // Get the number of post under category

                    if(is_category()){
                        $args = array('category_name' => $cat_name);
                        
                    }
                    elseif(is_archive()){
                        // $args = array('category_name' => $cat_name);
                        $tag_name = get_the_tags()[0]->name;
                        $args = array('tag' =>  $tag_name );
                    }

                    $the_query = new WP_Query( $args );
                    $no_of_post = $the_query->found_posts;
                    $post_perpage = get_option('posts_per_page');

                    if($no_of_post > $post_perpage){
                        load_more_button();
                    }
                    wp_reset_postdata();

                ?>

    	    </div><!-- #primary -->

        <?php //get_sidebar(); ?>

    </div> <!-- .row -->
        
    </div><!-- Container end -->
    
</div><!-- Wrapper end -->

<?php get_footer(); ?>
