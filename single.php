<?php get_header();?>
            <main id="content">
				<div class="container mt-3">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                            <div class="post">
                    
                            <?php the_content(); // displays whatever you wrote in the wordpress editor

                                /*
                                 * Include the post format-specific template for the content. If you want to
                                 * use this in a child theme, then include a file called called content-___.php
                                 * (where ___ is the post format) and that will be used instead.
                                 */
                                get_template_part( 'content', get_post_format() );
                                ?>
                                
                            </div>
                                <?php // If comments are open or we have at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif;
                     
                                // Previous/next post navigation.
                                the_post_navigation( array(
                                    'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
                                        '<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
                                        '<span class="post-title">%title</span>',
                                    'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
                                        '<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
                                        '<span class="post-title">%title</span>',
                                ) );
                     
                            // End the loop.
                           endwhile; endif; //ends the loop
                        ?>
                    
                </div>
			</main>
<?php get_footer(); ?>