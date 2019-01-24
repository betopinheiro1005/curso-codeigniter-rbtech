<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title><?= $titulo; ?></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?= base_url('assets/css/reset.css'); ?>" type="text/css" media="all">
        <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>" type="text/css" media="all">
        <!-- <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>" type="text/css" media="all"> -->
        <script type="text/javascript" src="<?= base_url('assets/js/jquery-1.4.2.min.js'); ?>" ></script>
        <script type="text/javascript" src="<?= base_url('assets/js/cufon-yui.js'); ?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/js/Humanst521_BT_400.font.js'); ?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/js/Humanst521_Lt_BT_400.font.js'); ?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/js/roundabout.js'); ?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/js/roundabout_shapes.js'); ?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/js/gallery_init.js'); ?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/js/cufon-replace.js'); ?>"></script>
        <!--[if lt IE 7]>
              <link rel="stylesheet" href="assets/css/ie/ie6.css" type="text/css" media="all">
        <![endif]-->
        <!--[if lt IE 9]>
              <script type="text/javascript" src="assets/js/html5.js"></script>
          <script type="text/javascript" src="js/IE9.js"></script>
        <![endif]-->
    </head>

    <body>

        <header>
            <div class="container">
                <h1>
                    <?php
                    echo $this->option->get_option('nome_site', 'Falta configurar');
                    ?>
                </h1>
                <nav>
                    <ul>
                        <li><a href="<?= base_url(); ?>" class="current">Home</a></li>
                        <li><a href="<?= base_url('about'); ?>">About</a></li>
                        <li><a href="<?= base_url('privacy'); ?>">Privacy</a></li>
                        <li><a href="<?= base_url('gallery'); ?>">Gallery</a></li>
                        <li><a href="<?= base_url('contacts'); ?>">Contact</a></li>
                        <li><a href="<?= base_url('sitemap'); ?>">Sitemap</a></li>
                    </ul>
                </nav>
            </div>
        </header>
