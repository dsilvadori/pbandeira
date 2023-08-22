<?php get_header(); ?>
        <div class="topo-biografia mobile-view">
            <div class="row">
                <div class="col-3" style="background:url(<?php echo get_template_directory_uri() ?>/img/PEDRO-BANDEIRA-34.png)">
                </div>
                <div class="col-3" style="background:url(<?php echo get_template_directory_uri() ?>/img/PEDRO-BANDEIRA-35.png)">
                </div>
                <div class="col-3" style="background:url(<?php echo get_template_directory_uri() ?>/img/PEDRO-BANDEIRA-33.png)">
                </div>
                <div class="col-3" style="background:url(<?php echo get_template_directory_uri() ?>/img/PEDRO-BANDEIRA-36.png)">
                </div>
            </div>
        </div>
        <main>
            <section class="content">
                <div class="container">
                    <article>
                        <?php the_content(); ?>

                        <?php $i = 1; 
                        if( have_rows('links_rep') ): 
                        while( have_rows('links_rep') ): the_row(); ?>
                        
                        <p><a href="<?php the_sub_field('link_url'); ?>" target="_blank" style="background:url(<?php echo get_template_directory_uri(); ?>/img/bg-link-<?php echo $i; ?>.png)"><?php the_sub_field('texto_do_link'); ?></a></p>
                        
                        <?php $i++;
                        endwhile; 
                        endif; ?>
                    </article>
                    <aside>
                        <img src="<?php echo get_template_directory_uri() ?>/img/PEDRO-BANDEIRA-34.png" alt="">
                        <img src="<?php echo get_template_directory_uri() ?>/img/PEDRO-BANDEIRA-35.png" alt="">
                        <img src="<?php echo get_template_directory_uri() ?>/img/PEDRO-BANDEIRA-33.png" alt="">
                        <img src="<?php echo get_template_directory_uri() ?>/img/PEDRO-BANDEIRA-36.png" alt="">
                    </aside>
            </div>
            </section>
        </main>
<?php get_footer(); ?>   