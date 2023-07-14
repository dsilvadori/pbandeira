<?php get_header(); ?>
<?php 
// Taxonomias
$colecao_serie = get_the_terms( $post->ID , 'colecao-serie' );
$editora = get_the_terms( $post->ID , 'editora' );
$indicacao = get_the_terms( $post->ID , 'indicacao' );
$faixa_etaria = get_the_terms( $post->ID , 'faixa-etaria' );
$nivel_de_leitura = get_the_terms( $post->ID , 'nivel-de-leitura' );
$assunto = get_the_terms( $post->ID , 'assunto' );
$tema_complementar = get_the_terms( $post->ID , 'tema-complementar' );
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
                        <strong>Coleção/série:</strong> <?php foreach ( $colecao_serie as $term ) { echo $term->name; }  ?><br />
                        <strong>Editora:</strong> <?php foreach ( $editora as $term ) { echo $term->name; }  ?><br />
                        <strong>Indicação:</strong> <?php foreach ( $indicacao as $term ) { echo $term->name; }  ?><br />
                        <strong>Faixa etária:</strong> <?php foreach ( $faixa_etaria as $term ) { echo $term->name; }  ?><br />
                        <strong>Nível de leitura:</strong> <?php foreach ( $nivel_de_leitura as $term ) { echo $term->name; }  ?><br />
                        <strong>Assunto(s):</strong> <?php foreach ( $assunto as $term ) { echo $term->name; }  ?><br />
                        <strong>Tema(s) complementar(es):</strong> <?php foreach ( $tema_complementar as $term ) { echo $term->name; }  ?><br />
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="desc-livro">
                        <p><?php the_field('descricao_livro'); ?></p>
                    </div>
                </div>
            </div>
            <div class="more-info">
                <?php the_field('informacoes-adicionais'); ?>
            </div>
            
        </div>
    </main>
<?php get_footer(); ?>