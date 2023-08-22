<?php get_header(); ?>
<main>
    <section class="content" id="topo-livros">
            <div class="row">
                <div class="col-md-6 offset-md-1 order-md-1 order-2">
                    <h2>BIBLIOGRAFIA</h2>
                    <p>Na minha carreira de escritor para crianças e adolescentes, há mais de 40 anos produzi e publiquei muuuitos livros que, você pode conhecer aqui. Cada livrinho destes tem um pedacinho de mim, alguma história que ouvi contarem, vi acontecer ou que imaginei, recombinando tudo o que já li e vivi.</p>
                    <p>Para encontrar qualquer um desses livros, recomendo que procure na biblioteca da sua escola ou do seu bairro, vá até a sua livraria preferida para um passeio naquele mundo fantástico ou compre pela internet, se preferir.</p>
                </div>
                <div class="col-md-5 order-md-2 order-1">
                    <div class="imagem-topo">
                        <img src="<?php echo get_template_directory_uri() ?>/img/PEDRO-BANDEIRA-18.png" alt="Pedro Bandeira">
                    </div>
                </div>
            </div>
    </section>
    <section class="sec-livros">
        <div class="container" id="itens-livros">
            
            <div class="sidebar" id="sidebar">
                <div id="livro-filters">
                    <h3>Filtros</h3>
                    <?php echo do_shortcode( '[fe_widget]' ); ?>
                </div>
            </div>
            <div id="content-livros">
                <div class="row">
                <?php $new_query = new WP_Query( array(
                    'posts_per_page' => 999,
                    'post_type'      => 'livro',
                    'orderby' => 'title',
                    'order'   => 'ASC',
                ) );
                $i = 1; 
                while ( $new_query->have_posts() ) : $new_query->the_post();  ?>
                <?php 
                // Taxonomias
                $colecao_serie = get_the_terms( $post->ID , 'colecao-serie' );
                $editora = get_the_terms( $post->ID , 'editora' );
                $ilustracoes = get_the_terms( $post->ID , 'ilustracoes' );
                $indicacao = get_the_terms( $post->ID , 'indicacao' );
                $faixa_etaria = get_the_terms( $post->ID , 'faixa-etaria' );
                $nivel_de_leitura = get_the_terms( $post->ID , 'nivel-de-leitura' );
                $assunto = get_the_terms( $post->ID , 'assunto' );
                $tema_complementar = get_the_terms( $post->ID , 'tema-complementar' );
                ?>

                        <div class="col-md-3">
                            <a href="<?php the_permalink(); ?>"><img src="<?php the_field('capa_do_livro'); ?>" alt="Capa do livro"></a>
                        </div>
                        <div class="col-md-5">
                            <a href="<?php the_permalink(); ?>"><p><strong><?php the_title(); ?></strong></p></a>
                            <a href="<?php the_permalink(); ?>"><p class="filtros-livros">
                                <strong>Coleção/série:</strong> <?php $text = ''; foreach ( $colecao_serie as $term ) { $text .= $term->name.', '; } $text = rtrim($text, ', '); echo $text;   ?><br />
                                <strong>Editora:</strong> <?php $text = ''; foreach ( $editora as $term ) { $text .= $term->name.', '; } $text = rtrim($text, ', '); echo $text;  ?><br />
                                <strong>Ilustrações:</strong> <?php $text = ''; foreach ( $ilustracoes as $term ) { $text .= $term->name.', '; } $text = rtrim($text, ', '); echo $text;  ?><br />
                                <strong>Indicação:</strong> <?php $text = ''; foreach ( $indicacao as $term ) { $text .= $term->name.', '; } $text = rtrim($text, ', '); echo $text;  ?><br />
                                <strong>Faixa etária:</strong> <?php $text = ''; foreach ( $faixa_etaria as $term ) { $text .= $term->name.', '; } $text = rtrim($text, ', '); echo $text;  ?><br />
                                <strong>Nível de leitura:</strong> <?php $text = ''; foreach ( $nivel_de_leitura as $term ) { $text .= $term->name.', '; } $text = rtrim($text, ', '); echo $text;  ?><br />
                                <strong>Assunto(s):</strong> <?php $text = ''; foreach ( $assunto as $term ) { $text .= $term->name.', '; } $text = rtrim($text, ', '); echo $text;  ?><br />
                                <strong>Tema(s) complementar(es):</strong> <?php $text = ''; foreach ( $tema_complementar as $term ) { $text .= $term->name.', '; } $text = rtrim($text, ', '); echo $text;  ?><br />
                            </p></a>
                        </div>
                        <div class="col-md-4">
                            <a href="<?php the_permalink(); ?>"><div class="desc-livro <?php echo 'cor-'.($i%2); ?>">
                                <p><?php the_field('descricao_livro'); ?></p>
                            </div></a>
                        </div>
                    
                    
                

                <?php $i++;  
                endwhile;  
                wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>