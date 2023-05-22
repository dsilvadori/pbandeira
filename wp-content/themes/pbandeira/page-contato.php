<?php get_header(); ?>  
    <main>
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo get_template_directory_uri() ?>/img/page-contato.png" alt="">
                </div>
                <div class="col-md-5" style="padding-top:40px">
                    <h2>CONVERSE COMIGO!</h2>
                    <p>Uma das coisas que mais gosto de fazer é conversar com minhas filhotas, como chamo as incríveis professoras do nosso Brasil, e com meus netinhos, os seus alunos, de quem depende o futuro do nosso País.</p>
                    <p>Pelo meu e-mail podemos combinar videoconferências com seus alunos. Esta tecnologia me ajuda muito a chegar mais facilmente até você.</p>
                    <p>E pode também me escrever para contar de você. Eu adoro saber suas notícias e como tem sido o seu trabalho. Espero você!</p>
                    <p><a class="email-contato" href="mailto:eupedrobandeira@gmail.com" style="background:url(<?php echo get_template_directory_uri() ?>/img/bg-email.png)">eupedrobandeira@gmail.com</a></p>
                    <p>Ainda, se quiser, às vezes eu gosto de mandar notícias e histórias bacanas por e-mail e você pode receber isso tudinho, inscrevendo seu e-mail aqui:</p>
                    <div class="form-newsletter">
                        <?php echo do_shortcode( '[contact-form-7 id="50" title="Newsletter"]' ); ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>   