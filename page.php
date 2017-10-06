<?php get_header();?>
            <main id="content">
				<div class="container">
					<div class="row">
                        <?php get_sidebar('left');?>                 
                        
						<div class="col-md-<?php 
                            if (is_active_sidebar('sidebar-left') && is_active_sidebar('sidebar-right')) {
                                // if both sidebar actived.
                                $main_column_size = 6;
                            } elseif (
                                (is_active_sidebar('sidebar-left') && !is_active_sidebar('sidebar-right')) || 
                                (is_active_sidebar('sidebar-right') && !is_active_sidebar('sidebar-left'))
                            ) {
                                // if only one sidebar actived.
                                $main_column_size = 9;
                            } else {
                                // if no sidebar actived.
                                $main_column_size = 12;
                            }

                            echo $main_column_size;?> ">
                           
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post();       
                              the_content(); // displays whatever you wrote in the wordpress editor
                              endwhile; endif; //ends the loop
                            ?>
						</div>
                        <?php get_sidebar('right'); ?> 
					</div>
                </div>
			</main>
<?php get_footer(); ?>