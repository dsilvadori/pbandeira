<?php get_header(); ?>    
    <main>
        <section class="banner-principal">
            <div class="container-fluid" style="padding:0">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-6 order-lg-1 order-md-1 order-1" style="background:url(<?php echo get_template_directory_uri(); ?>/img/image-1.png);background-size: cover;background-position-x: right;">
                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/image-1.png" alt=""> -->
                    </div>
                    <div class="col-lg-4 col-md-12 col-12 order-lg-2 order-md-3 order-3" style="padding: 45px 20px 0;">
                        <?php the_content(); ?>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6 order-lg-3 order-md-2 order-2" style="background:url(<?php echo get_template_directory_uri(); ?>/img/image-2.png);background-size: cover;background-position-x: left;">
                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/image-2.png" alt=""> -->
                    </div>
                </div>
            </div>
        </section>   
    </main>
<?php get_footer(); ?>    