			<footer>
                <div class="container">
                    <div class="row">
                        <div class="footer-left col-sm-4">
                            <?php dynamic_sidebar('footer-left'); ?>
                        </div>
                        <div class="footer-center text-center col-sm-<?php 
                            if (is_active_sidebar('footer-left') && is_active_sidebar('footer-right')) {
                                // if both sidebar actived.
                                $main_column_size = 4;
                            } elseif (
                                (is_active_sidebar('footer-left') && !is_active_sidebar('footer-right')) || 
                                (is_active_sidebar('footer-right') && !is_active_sidebar('footer-left'))
                            ) {
                                // if only one sidebar actived.
                                $main_column_size = 8;
                            } else {
                                // if no sidebar actived.
                                $main_column_size = 12;
                            }

                            echo $main_column_size;?> ">
                            <?php dynamic_sidebar('footer-center'); ?> 
                        </div>
                        <div class="footer-right text-right col-sm-4">
                            <?php dynamic_sidebar('footer-right'); ?> 
                        </div>
                    </div>
                    <?php echo '<p class="text-center"><a href="http://graviti.code" target="_blank">&copy; graviti</a></p>'; ?>
                </div>
			</footer>
		</div>
		<?php wp_footer(); ?> 
	</body>
</html>