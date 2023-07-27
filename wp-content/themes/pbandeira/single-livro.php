<?php get_header(); ?>
<?php 
// Taxonomias
$colecao_serie = get_the_terms( $post->ID , 'colecao-serie' );
$editora = get_the_terms( $post->ID , 'editora' );
$indicacao = get_the_terms( $post->ID , 'indicacao' );
$ilustracoes = get_the_terms( $post->ID , 'ilustracoes' );
$faixa_etaria = get_the_terms( $post->ID , 'faixa-etaria' );
$nivel_de_leitura = get_the_terms( $post->ID , 'nivel-de-leitura' );
$assunto = get_the_terms( $post->ID , 'assunto' );
$tema_complementar = get_the_terms( $post->ID , 'tema-complementar' );
$informacoes_adicionais = get_field('informacoes_adicionais');
$video = get_field('video_embed');
?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-3 l-navbar" id="nav-bar">
                    <img src="<?php the_field('capa_do_livro'); ?>" alt="Capa do livro">
                </div>
                <div class="col-md-5">
                    <p><strong><?php the_title(); ?></strong></p>
                    <p class="filtros-livros">
                        <strong>Coleção/série:</strong> <?php $text = ''; foreach ( $colecao_serie as $term ) { $text .= $term->name.', '; } $text = rtrim($text, ', '); echo $text;   ?><br />
                        <strong>Editora:</strong> <?php $text = ''; foreach ( $editora as $term ) { $text .= $term->name.', '; } $text = rtrim($text, ', '); echo $text;  ?><br />
                        <strong>Ilustrações:</strong> <?php $text = ''; foreach ( $ilustracoes as $term ) { $text .= $term->name.', '; } $text = rtrim($text, ', '); echo $text;  ?><br />
                        <strong>Indicação:</strong> <?php $text = ''; foreach ( $indicacao as $term ) { $text .= $term->name.', '; } $text = rtrim($text, ', '); echo $text;  ?><br />
                        <strong>Faixa etária:</strong> <?php $text = ''; foreach ( $faixa_etaria as $term ) { $text .= $term->name.', '; } $text = rtrim($text, ', '); echo $text;  ?><br />
                        <strong>Nível de leitura:</strong> <?php $text = ''; foreach ( $nivel_de_leitura as $term ) { $text .= $term->name.', '; } $text = rtrim($text, ', '); echo $text;  ?><br />
                        <strong>Assunto(s):</strong> <?php $text = ''; foreach ( $assunto as $term ) { $text .= $term->name.', '; } $text = rtrim($text, ', '); echo $text;  ?><br />
                        <strong>Tema(s) complementar(es):</strong> <?php $text = ''; foreach ( $tema_complementar as $term ) { $text .= $term->name.', '; } $text = rtrim($text, ', '); echo $text;  ?><br />
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="desc-livro">
                        <p><?php the_field('descricao_livro'); ?></p>
                    </div>
                </div>
            </div>
            <?php if (!empty($informacoes_adicionais)) : ?>
            <div class="more-info" style="padding-top:20px">
                <?php the_field('informacoes_adicionais'); ?>
            </div>
            <?php endif; ?>
            <?php if (!empty($video)) : ?>
            <div class="video-container" style="padding-top:20px">
                <?php the_field('video_embed'); ?>
            </div>
            <?php endif; ?>
            
        </div>
    </main>
<?php get_footer(); ?>