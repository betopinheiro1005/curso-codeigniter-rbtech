<div class="container">
    <div class="row">
        <div class="col-md-12"><?php $this->load->view('painel/header'); ?></div> 
    </div>
</div>    

<div class="container">
    <div class="row">
        <div class="col-md-3">&nbsp;</div> 
        <div class="col-md-6">
            <h1>
                <?php
                if ($nome_site = $this->option->get_option('nome_site')) {
                    echo $nome_site;
                } else {
                    echo 'Falta Configurar';
                }
                ?>
            - Painel Administrativo</h1>
        </div>        
        <div class="col-md-3">&nbsp;</div> 
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-3">&nbsp;</div> 
        <div class="col-md-6">
            <h2><?= $h2; ?></h2><br />

            <?php
            if ($msg = get_msg()):
                echo '<div class="msg-box">' . $msg . '</div>';
            endif;

            echo form_open();
            echo form_label('Nome para login:', 'login');
            echo form_input('login', set_value('login'), array('autofocus' => 'autofocus'));
            echo form_label('Email do administrador do site:', 'email');
            echo form_input('email', set_value('email'));
            echo form_label('Senha (deixe em branco para não alterar):', 'senha');
            echo form_password('senha');
            echo form_label('Repita a senha:', 'senha2');
            echo form_password('senha2');
            echo form_label('Nome do site:', 'nome_site');
            echo form_input('nome_site', set_value('nome_site'));
            echo form_submit('enviar', 'Salvar dados', array('class' => 'btn btn-success pull-right'));
            echo form_close();
            ?>
        </div> 
        <div class="col-md-3">&nbsp;</div> 
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12"><?php $this->load->view('painel/footer'); ?></div>   
    </div>
</div>    
<br />
