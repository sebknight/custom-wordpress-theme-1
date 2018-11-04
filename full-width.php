<?php 

    /* Template Name: Full Page Width */

?>

<?php get_header(); ?>
            <?php if (have_posts()): ?>
                <!-- Loop over the posts/post and get the current one you are on -->
                <?php while (have_posts()): the_post();?>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <h1><?= the_title(); ?></h1>
                            </div>
                        </div>

                          <div class="row">
                            <div class="col">
                                <h1><?= the_content(); ?></h1>
                            </div>
                        </div>    

                    </div>
                <?php endwhile;?>
            <?php endif;?>

<?php get_footer(); ?>