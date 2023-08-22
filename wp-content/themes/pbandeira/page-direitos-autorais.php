<?php get_header(); ?>
    <div class="mobile-view">
        <img src="<?php echo get_template_directory_uri() ?>/img/page-direitos-autorais.png" alt="Pedro Bandeira">
    </div>
    <main>
        <section class="content">
            <div class="container">
                <article style="width:50%">            
                    <?php the_content(); ?>
                </article>
                <aside style="width:50%">
                    <div class="picture-band">
                        <img src="<?php echo get_template_directory_uri() ?>/img/page-direitos-autorais.png" alt="Pedro Bandeira">
                    </div>
                </aside>
            </div>
        </section>
    </main>
<?php get_footer(); ?>