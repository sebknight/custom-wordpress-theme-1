<<<<<<< HEAD
<?php get_header();?>

    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post();?>
	            <div class="container">
	                <div class="row">
	                    <div class="col">
	                        <h1></h1>

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
=======
<!--
    single.php renders out the individual blog posts which you create
    using the wordpress dashboard.
    If this file doesn't exist, it will default to index.php

    https://developer.wordpress.org/themes/template-files-section/post-template-files/#single-php
 -->

<?php get_header(); ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post();?>
            <!--
                We are going to do the same thing as front-page.php and render
                out the content differently depending on what post format it is.
            -->
            <?php get_template_part('content', get_post_format()); ?>
        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>
>>>>>>> 67df41381a5e497cf5664cdddc8db375f2c9aedd
