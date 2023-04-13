<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css">
    <title><?php the_title(); ?> - Pedro Bandeira</title>
    <?php wp_head(); ?>
</head>
<body class="<?php echo $post->post_name; ?>">
    <header>
        <div class="container">
            <nav>
                <ul>
                    <li><a href="<?php echo get_home_url(); ?>/biografia">biografia</a></li>
                    <li><a href="#">fotos</a></li>
                    <li><a href="#">livros</a></li>
                    <li><a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/logo-topo.png" alt="logo"></a></li>
                    <li><a href="#">vídeos</a></li>
                    <li><a href="#">direitos autorais</a></li>
                    <li><a href="#">contato</a></li>
                </ul>
            </nav>
        </div>
        <div class="container-full">
            <hr class="hr-site">
        </div>
    </header>