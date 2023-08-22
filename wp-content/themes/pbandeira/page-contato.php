<?php get_header(); ?>  
    <main>
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo get_template_directory_uri() ?>/img/page-contato.png" alt="">
                </div>
                <div class="col-md-5" style="padding-top:40px">
                    <?php the_content(); ?>
                    <div class="form-newsletter">
                        <?php echo do_shortcode( '[contact-form-7 id="50" title="Newsletter"]' ); ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>   