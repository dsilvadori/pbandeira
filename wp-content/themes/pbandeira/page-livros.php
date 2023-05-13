<?php get_header(); ?>
<main>
    <section class="content">
        <div class="container">
            <article>
                <h2>BIBLIOGRAFIA</h2>
                <p>Na minha carreira de escritor para crianças e adolescentes, há mais de 40 anos produzi e publiquei muuuitos livros que, você pode conhecer aqui. Cada livrinho destes tem um pedacinho de mim, alguma história que ouvi contarem, vi acontecer ou que imaginei, recombinando tudo o que já li e vivi.</p>
                <p>Para encontrar qualquer um desses livros, recomendo que procure na biblioteca da sua escola ou do seu bairro, vá até a sua livraria preferida para um passeio naquele mundo fantástico ou compre pela internet, se preferir.</p>
            </article>
            <aside>
                <div class="picture-band">
                    <img src="<?php echo get_template_directory_uri() ?>/img/PEDRO-BANDEIRA-18.png" alt="Pedro Bandeira">
                </div>
            </aside>
        </div>
    </section>
    <section class="sec-livros">
    <?php $i = 1; 
    if( have_rows('livros_rep') ): 
    while( have_rows('livros_rep') ): the_row(); ?>
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <img src="<?php the_sub_field('capa'); ?>" alt="Capa do Livro">
                </div>
                <div class="col-md-5">
                    <p><strong><?php the_sub_field('titulo'); ?></strong></p>
                    <?php the_sub_field('informacoes'); ?>
                </div>
                <div class="col-md-4">
                    <div class="desc-livro <?php echo 'cor-'.($i%2); ?>">
                        <?php the_sub_field('sinopse'); ?>
                    </div>
                </div>
            </div>    
        </div>
        <?php $i++; 
        endwhile; 
        endif; ?>
    </section>
</main>
<?php get_footer(); ?>