<div class="container">
    <div class="row">
        <div class="col-md-12"><?php $this->load->view('painel/header'); ?></div> 
    </div>

</div>    

<div class="container">
    <div class="row">
        <div class="col-md-2">&nbsp;</div> 
        <div class="col-md-10">
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
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-2">
            <div id="cssmenu_vertical">
                <ul>
                    <li><a href="<?= base_url('noticia/cadastrar'); ?>"><span>Inserir</span></a></li>
                    <li><a href="<?= base_url('noticia/listar'); ?>"><span>Listar</span></a></li>
                </ul>
            </div>    
        </div> 

        <div class="col-md-10">
            <h2><?= $h2; ?></h2><br />

            <?php
            if ($msg = get_msg()):
                echo '<div class="msg-box">' . $msg . '</div>';
            endif;

            switch ($tela):
                case 'listar':
                    // echo 'Tela de Listagem';
                    if (isset($noticias) && sizeof($noticias) > 0) :
                        ?>

                        <table>
                            <thead>
                            <th class="text-left">Título</th>
                            <th class="text-right">Ações</th>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($noticias as $linha):
                                    ?>
                                    <tr>
                                        <td class="titulo-noticia text-left"><?php echo $linha->titulo; ?></td>
                                        <td class="acoes text-right"><?php echo anchor('noticia/editar/' . $linha->id, 'Editar'); ?> | <?php echo anchor('noticia/excluir/' . $linha->id, 'Excluir'); ?> | <?php echo anchor('post/' . $linha->id, 'Ver', array('target' => '_blank')); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <?php
                    else:
                        echo '<div class="msg-box"><p>Nenhuma notícia cadastrada!</p></div>';
                    endif;
                    break;
                case 'cadastrar':
                    // echo 'Tela de Cadastro';
                    echo form_open_multipart();
                    echo form_label('Título:', 'titulo');
                    echo form_input('titulo', set_value('titulo'));
                    echo form_label('Conteúdo:', 'conteudo');
                    echo form_textarea('conteudo', to_html(set_value('conteudo')), array('class' => 'editorhtml'));
                    echo form_label('Imagem da notícia (thumbnail):', 'imagem');
                    echo form_upload('imagem');
                    echo form_submit('enviar', 'Salvar notícia', array('class' => 'btn btn-success'));
                    echo form_close();
                    break;
                case 'editar':
                    // echo 'Tela de Alteração';
                    echo form_open_multipart();
                    echo form_label('Título:', 'titulo');
                    echo form_input('titulo', set_value('titulo', to_html($noticia->titulo)));
                    echo form_label('Conteúdo:', 'conteudo');
                    echo form_textarea('conteudo', to_html(set_value('conteudo', to_html($noticia->conteudo))), array('class' => 'editorhtml'));
                    echo form_label('Imagem da notícia (thumbnail):', 'imagem');
                    echo form_upload('imagem');
                    echo '<p><small>Imagem atual: </small><br /><img src="' . base_url('uploads/' . $noticia->imagem) . '" class="thumb-edicao" /></p>';
                    echo form_submit('enviar', 'Salvar notícia', array('class' => 'btn btn-success'));
                    echo form_close();
                    break;
                case 'excluir':
                    // echo 'Tela de Exclusão';
                    echo form_open_multipart();
                    echo form_label('Título:', 'titulo');
                    echo form_input('titulo', set_value('titulo', to_html($noticia->titulo)));
                    echo form_label('Conteúdo:', 'conteudo');
                    echo form_textarea('conteudo', to_html(set_value('conteudo', to_html($noticia->conteudo))), array('class' => 'editorhtml'));
                    echo '<p><small>Imagem: </small><br /><img src="' . base_url('uploads/' . $noticia->imagem) . '" class="thumb-edicao" /></p>';
                    echo form_submit('enviar', 'Excluir notícia', array('class' => 'btn btn-success'));
                    echo form_close();
                    break;
            endswitch;
            ?>
        </div> 
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12"><?php $this->load->view('painel/footer'); ?></div>   
    </div>
</div>    
<br />
