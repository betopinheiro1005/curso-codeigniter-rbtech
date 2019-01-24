<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title><?= $titulo; ?></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/panel.css'); ?>" type="text/css">        
    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-3">&nbsp;</div> 
                <div class="col-md-6">
                    <h2><?= $h2; ?></h2>

                    <?php

                    if ($msg = get_msg()):
                        echo '<div class="msg-box">' . $msg . '</div>';
                    endif;

                    echo form_open();
                    echo form_label('Nome para login:', 'login');
                    echo form_input('login', set_value('login'), array('autofocus' => 'autofocus'));
                    echo form_label('Email do administrador do site:', 'email');
                    echo form_input('email', set_value('email'));
                    echo form_label('Senha:', 'senha');
                    echo form_password('senha', set_value('senha'));
                    echo form_label('Repita a senha:', 'senha2');
                    echo form_password('senha2', set_value('senha2'));
                    echo form_submit('enviar', 'Salvar dados', array('class' => 'btn btn-success pull-right'));
                    echo form_close();
                    ?>
                </div> 
                <div class="col-md-3">&nbsp;</div> 
            </div>
        </div>

    </body>

</html>