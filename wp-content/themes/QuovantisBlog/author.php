<?php
/**
 * The template for displaying the author pages.
 *
 * Learn more: https://codex.wordpress.org/Author_Templates
 *
 * @package understrap
 */
get_header(); ?>

<div class="wrapper" id="author-wrapper">
    
    <div  id="content" class="container-fluid">

        <div class="row">   

            <?php

                $curauth = (isset($_GET['author_name'])) ? 
                            get_user_by('slug', $author_name) : 
                            get_userdata(intval($author));
            ?>
             <div class="category-image-container">
                <div class="category-header-bg">

                    <div class="header-post container">
                        <div class="caption">
                            <header class="entry-header">
                                    <div class="tag-name">
                                        <?php if ( ! empty( $curauth->ID ) ) : ?>
                                            <div class="author-image margin-bottom-x10">
                                                <?php echo get_avatar($curauth->ID); ?>        
                                            </div>
                                            <h5 class="about-author"><?php echo $curauth->nickname; ?></h5>
                                        <?php endif; ?>
                                    </div>
                                <?php //understrap_posted_on(); ?>

                            </header><!-- .entry-header -->
                        </div>
                    </div>

                </div>
            </div>


            <!-- <div id="primary" class="<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?> content-area"> -->
            <div id="primary" class="content-area container"> 
               <div class="row">
                <main id="main" class="site-main" role="main">
                        
                    <header class="page-header author-header">                        
                            
                    </header><!-- .page-header -->
                        <!-- The Loop -->                        
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <!-- Content -->
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
                                        
                                        <div class="category" >
                                            <!-- #<?php echo $cats_name; ?> -->
                                            <a class="<?php echo $cat_slug_name  ?>" href="<?php echo esc_url( $category_link ); ?>">#<?php echo $cats_name; ?></a>
                                        </div>
                                                
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
                                
                            </article><!-- #post-## -->

                            <!-- End Content -->
                        
                        <?php endwhile; ?>

                        <?php //the_posts_navigation(); ?>

                        <?php else : ?>
                            <?php get_template_part( 'loop-templates/content', 'none' ); ?>
                        <?php endif; ?>
                        
                        <!-- End Loop -->

                </main><!-- #main -->
               </div><!-- row -->
            </div><!-- #primary -->

            <?php //get_sidebar(); ?>

        </div> <!-- .row -->
        
    </div><!-- Container end -->
    
</div><!-- Wrapper end -->

<?php get_footer(); ?>