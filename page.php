<?php get_header(); ?>
    
    <?php  if(have_posts()): ?>
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
