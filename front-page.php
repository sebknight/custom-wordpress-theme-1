<!--
    This file will render whatever page you set as your home page.
    By default the home page is a list of all the posts but you can change it
    to a static page through the customize section and the home page settings tab.
-->

<!--
    get_header('front') would then look for header-front.php rather than header.php
    https://codex.wordpress.org/Function_Reference/get_header
 -->
<?php get_header('front'); ?>

        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Home Page</h1>
                </div>
            </div>
            <div class="row">
                <?php if(have_posts()): ?>
                    <div class="col">
                        <div class="card-columns">
                            <?php while(have_posts()): the_post();?>
                                <!--
                                    What we are going to do is render out a different card
                                    depending on what post format our post is.
                                    What it is going to look for is a file called content-{postformat}.php.
                                    If it cant't find that file, it will look for content.php.
                                    It will then paste the contents of that file into this location.
                                -->
                                <?php get_template_part('content', get_post_format()); ?>

                            <?php endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
<?php get_footer(); ?>
