<<<<<<< HEAD
<?php get_header(); ?>
    
    <?php  if(have_posts()): ?>
=======
<!--
    page.php will render out any of your pages which gets created in the admin
    dashboard that don't use a template, or has a unique file for it.
    If this file doesn't exist, it will default to index.php

    https://developer.wordpress.org/themes/template-files-section/page-template-files/
 -->

<?php get_header(); ?>

    <?php if(have_posts()): ?>
>>>>>>> 67df41381a5e497cf5664cdddc8db375f2c9aedd
        <?php while(have_posts()): the_post();?>
            <div class="container">
                <div class="row">
                    <div class="col">
<<<<<<< HEAD
                        <h1></h1>   
                    
                    </div>
                </div>

                 <div class="row">
                    <div class="col">
                        <?php the_content(); ?>                        
                    </div>
                </div>   
            </div>
        <?php endwhile; ?>
    <?php endif; ?>

        


<?php get_footer(); ?>
=======
                        <h1><?= the_title(); ?></h1>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>
>>>>>>> 67df41381a5e497cf5664cdddc8db375f2c9aedd
