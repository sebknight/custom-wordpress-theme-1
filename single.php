<?php get_header();?>

    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post();?>
	            <div class="container">
	                <div class="row">
	                    <div class="col">
	                        <h1>Posts</h1>

	                    </div>
	                </div>

	                 <div class="row">
	                    <div class="col">
	                        <?php the_content();?>
                        </div>

	                </div>
	            </div>
	        <?php endwhile;?>
    <?php endif;?>




<?php get_footer();?>
