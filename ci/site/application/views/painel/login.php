<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title><?= $titulo; ?></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" type="text/css">
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>" type="text/css">
        <link rel="stylesheet" href="<?= base_url('assets/css/painel.css'); ?>" type="text/css">        
    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4">&nbsp;</div> 
                <div class="col-md-4 tela_login">
                    <h2><?= $h2; ?></h2><br />

                    <?php
                    if ($msg = get_msg()):
                        echo '<div class="msg-box">' . $msg . '</div>';
                    endif;

                    echo form_open();
                    echo form_label('Usuário:', 'login');
                    echo form_input('login', set_value('login'), array('autofocus' => 'autofocus'));
                    echo form_label('Senha:', 'senha');
                    echo form_password('senha').'<br />';
                    echo form_submit('enviar', 'Autenticar', array('class' => 'btn btn-success pull-right'));
                    echo form_close();
                    ?>
                </div> 
                <div class="col-md-4">&nbsp;</div> 
            </div>
        </div>

    </body>

</html>