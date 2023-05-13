<?php get_header(); ?>
<main>
    <section class="content">
        <div class="container-full">    
            <div class="row">
                <div class="col-md-5">
                    <img src="<?php echo get_template_directory_uri() ?>/img/PEDRO-BANDEIRA-19.png" alt="Pedro Bandeira">
                </div>
                <div class="col-md-6">
                    <h2>CURTA MEUS VÍDEOS</h2>
                    <p>Você sabe como é gostoso ler um livro, sentir aquele cheirinho que é só dele, encontrar aquela lombada na sua prateleira... Bom, eu admito que sou desses, mas, para ser justo, os vídeos têm me ajudado muito a estar mais perto de você, principalmente agora que já estou mais velhinho e não consigo mais acompanhar aquela agenda maluca de viagens para todo o lado.</p>
                    <p>Então, que tal você me acompanhar lá no meu canal? Veja aqui alguns dos vídeos que tenho produzido, sempre estimulando a utilização da Literatura para o letramento e nos processos de amadurecimento emocional das crianças e adolescentes. Espero que goste!</p>
                </div>
            </div>
            
        </div>
    </section>
    <section class="sec-livros videos">
        <div class="container">
            <?php if( have_rows('videos_rep') ): 
            while( have_rows('videos_rep') ): the_row(); ?>
            <h3><?php the_sub_field('titulo') ?></h3>
            <div class="video-container">
                <?php the_sub_field('codigo_de_incorporacao') ?>
            </div>
            <?php endwhile; 
            endif; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>