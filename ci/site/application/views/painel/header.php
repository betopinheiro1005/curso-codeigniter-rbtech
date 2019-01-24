<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title><?= $titulo; ?></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" type="text/css">        
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>" type="text/css" media="all">
        <link rel="stylesheet" href="<?= base_url('assets/css/normalize.css'); ?>" type="text/css" media="all">
        <link rel="stylesheet" href="<?= base_url('assets/css/painel.css'); ?>" type="text/css" media="all">
        <link rel="stylesheet" href="<?= base_url('assets/css/jquery-te-1.4.0.css'); ?>" type="text/css" media="all">
        <script type="text/javascript" src="<?= base_url('assets/js/jquery-3.2.1.js'); ?>"></script>        
        <script type="text/javascript" src="<?= base_url('assets/js/jquery-te-1.4.0.min.js'); ?>"></script>
    </head>

    <body>

        <header>
            <div class="container">
                <nav>
                    <div id='cssmenu'>
                        <ul>
                            <li><a href="<?= base_url(); ?>" target="_blank"><span>Ver site</span></a></li>
                            <li><a href="<?= base_url('noticia'); ?>"><span>Notícias</span></a></li>
                            <li><a href="<?= base_url('setup'); ?>"><span>Configuração</span></a></li>
                            <li class='last'><a href="<?= base_url('setup/logout'); ?>"><span>Sair</span></a></li>
                        </ul>
                    </div>
                </nav>
            </div>  
        </header>

        