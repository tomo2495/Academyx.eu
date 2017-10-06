<?php get_header();?>
<style>
body{
	background:#f9f9f9;
}
</style>
            <main id="content">
            
                <?php require get_template_directory() . '/inc/index-slider.php'; ?>
			
                <div class="container">
					<div class="row mt-3">
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
                           
							<?php if (have_posts()) { ?> 
							<?php 
							// start the loop
							while (have_posts()) {
								the_post();
									
								/* Include the Post-Format-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Format name) and that will be used instead.
								*/
								get_template_part('content', get_post_format());
							}// end while
								
							//bootstrapBasicPagination();
							?> 
							<?php } else { ?> 
							<?php get_template_part('no-results', 'index'); ?>
							<?php } // endif; ?> 
                            
                            <div class="divider transparent">&nbsp;</div>
                            
                            <?php require get_template_directory() . '/inc/index-services.php'; ?>
                            
                            <div class="divider transparent">&nbsp;</div>
                            
                            <?php require get_template_directory() . '/inc/index-references.php'; ?>
                            
						</div>
                        <?php get_sidebar('right'); ?> 
					</div>
                </div>
			</main>
<?php get_footer(); ?>