<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/glightbox-master/dist/css/glightbox.css" />
    <script src="<?php echo get_template_directory_uri() ?>/glightbox-master/dist/js/glightbox.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css">
    <title><?php the_title(); ?> - Pedro Bandeira</title>
    <?php wp_head(); ?>
</head>
<?php if (is_page()) : ?>
<body class="<?php echo $post->post_name; ?>">
<?php else: ?>
<body>
<?php endif; ?>
    <header>
        <div class="topo">
            <nav>
                <ul>
                    <li><a href="<?php echo get_home_url(); ?>/biografia">biografia</a></li>
                    <li><a href="<?php echo get_home_url(); ?>/fotos">fotos</a></li>
                    <li><a href="<?php echo get_home_url(); ?>/livros">livros</a></li>
                    <li><a href="<?php echo get_home_url(); ?>/videos">vídeos</a></li>
                    <li><a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/logo-topo.png" alt="logo"></a></li> 
                    <li><a href="<?php echo get_home_url(); ?>/direitos-autorais">direitos autorais</a></li>
                    <li><a href="<?php echo get_home_url(); ?>/contato">contato</a></li>
                    <li><a href="https://www.facebook.com/pedrobandeira.oficial" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/facebook-icon.png" alt="logo"></a></li> 
                    <li><a href="https://www.instagram.com/eupedrobandeira/ " target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/insta-icon.png" alt="logo"></a></li> 
                    <li><a href="https://www.youtube.com/pedrobandeiraescritor" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/youtube-icon.png" alt="logo"></a></li> 
                </ul>
            </nav>
            <hr class="hr-site">
        </div>

        <div class="topo-mobile">
            <div class="container-menu-mobile">

                    <a class="logo-mobile" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/logo-topo.png" alt="logo"></a>
                    


                    <input class="menu-btn" type="checkbox" id="menu-btn" />
                    <label class="menu-icon" for="menu-btn">
                        <span class="navicon"></span>
                    </label>
                    <nav class='menu'>
                        <a href="<?php echo get_home_url(); ?>/biografia">biografia</a>
                        <a href="<?php echo get_home_url(); ?>/fotos">fotos</a>
                        <a href="<?php echo get_home_url(); ?>/livros">livros</a>
                        <a href="<?php echo get_home_url(); ?>/videos">vídeos</a>
                        <a href="<?php echo get_home_url(); ?>/direitos-autorais">direitos autorais</a>
                        <a href="<?php echo get_home_url(); ?>/contato">contato</a>
                        <ul class="redes-mobile">
                            <li><a class="redes-m" href="https://www.facebook.com/pedrobandeira.oficial" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/facebook-icon.png" alt="logo"></a></li>
                            <li><a class="redes-m" href="https://www.instagram.com/eupedrobandeira/ " target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/insta-icon.png" alt="logo"></a></li>
                            <li><a class="redes-m" href="https://www.youtube.com/pedrobandeiraescritor" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/youtube-icon.png" alt="logo"></a></li>
                        </ul>
                    </nav>

            </div>
            <hr class="hr-site">
        </div>
        
    </header>