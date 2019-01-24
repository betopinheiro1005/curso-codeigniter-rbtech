<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Noticia extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('option_model', 'option');
        $this->load->model('noticia_model', 'noticia');
    }

    public function index() {
        redirect('noticia/listar', 'refresh');
    }

    public function listar() {
        // verificar se o usuário está logado
        verifica_login();

        // carrega as views
        $dados['titulo'] = 'Listagem de Notícias';
        $dados['h2'] = 'Listagem de Notícias';
        $dados['tela'] = 'listar';
        $dados['noticias'] = $this->noticia->get();
        $this->load->view('painel/noticias', $dados);
    }

    public function cadastrar() {
        // verificar se o usuário está logado
        verifica_login();

        // regras de validação
        $this->form_validation->set_rules('titulo', 'TÍTULO', 'trim|required');
        $this->form_validation->set_rules('conteudo', 'CONTEÚDO', 'trim|required');

        // verificação da validação
        if ($this->form_validation->run() == FALSE):
            if (validation_errors()):
                set_msg(validation_errors());
            endif;
        else:
            $this->load->library('upload', config_upload());
            if ($this->upload->do_upload('imagem')):
                // upload foi efetuado
                $dados_upload = $this->upload->data();
                $dados_form = $this->input->post();
                // var_dump($dados_upload);
                $dados_insert['titulo'] = to_bd($dados_form['titulo']);
                $dados_insert['conteudo'] = to_bd($dados_form['conteudo']);
                $dados_insert['imagem'] = $dados_upload['file_name'];
                // salvar no banco de dados
                if ($id = $this->noticia->salvar($dados_insert)):
                    set_msg('<p>Notícia cadastrada com sucesso!</p>');
                    redirect('noticia/editar/'.$id, 'refresh');
                else:
                    set_msg('<p>Erro! Notícia não cadastrada!</p>');
                endif;
            else:
                // erro no upload
                $msg = $this->upload->display_errors();
                $msg .= '<p>São permitidos arquivos JPG e PNG de até 512Kb.</p>';
                set_msg($msg);
            endif;
        endif;

        // carrega as views
        $dados['titulo'] = 'Cadastro de Notícias';
        $dados['h2'] = 'Cadastro de Notícias';
        $dados['tela'] = 'cadastrar';
        $this->load->view('painel/noticias', $dados);
    }

    public function excluir() {

        // verificar se o usuário está logado
        verifica_login();

        // verifica se foi passado o id da notícia
        $id = $this->uri->segment(3);
        if ($id > 0):
            // id informado, continuar com exclusão
            if ($noticia = $this->noticia->get_single($id)):
                $dados['noticia'] = $noticia;
            else:
                set_msg('<p>Notícia inexistente! Escolha uma notícia para excluir!</p>');
                redirect('noticia/listar', 'refresh');
            endif;
        else:
            set_msg('<p>Você deve escolher uma notícia para excluir!</p>');
            redirect('noticia/listar', 'refresh');
        endif;

        // regras de validação
        $this->form_validation->set_rules('enviar', 'ENVIAR', 'trim|required');

        // verificação da validação
        if ($this->form_validation->run() == FALSE):
            if (validation_errors()):
                set_msg(validation_errors());
            endif;
        else:
            $imagem = 'uploads/' . $noticia->imagem;
            if ($this->noticia->excluir($id)):
                // exclui a imagem da noticia
                unlink($imagem);
                set_msg('<p>Notícia excluída com sucesso!</p>');
                redirect('noticia/listar', 'refresh');
            else:
                set_msg('<p>Erro! Nenhuma notícia foi excluída.</p>');
            endif;
        endif;

        // carrega as views
        $dados['titulo'] = 'Exclusão de Notícia';
        $dados['h2'] = 'Exclusão de Notícias';
        $dados['tela'] = 'excluir';
        $this->load->view('painel/noticias', $dados);
    }

    public function editar() {

        // verificar se o usuário está logado
        verifica_login();

        // verifica se foi passado o id da notícia
        $id = $this->uri->segment(3);
        if ($id > 0):
            // id informado, continuar com a edição
            if ($noticia = $this->noticia->get_single($id)):
                $dados['noticia'] = $noticia;
                $dados_update['id'] = $noticia->id;
            else:
                set_msg('<p>Notícia inexistente! Escolha uma notícia para editar!</p>');
                redirect('noticia/listar', 'refresh');
            endif;
        else:
            set_msg('<p>Você deve escolher uma notícia para editar!</p>');
            redirect('noticia/listar', 'refresh');
        endif;

        // regras de validação
        $this->form_validation->set_rules('titulo', 'TÍTULO', 'trim|required');
        $this->form_validation->set_rules('conteudo', 'CONTEÚDO', 'trim|required');

        // verificação da validação
        if ($this->form_validation->run() == FALSE):
            if (validation_errors()):
                set_msg(validation_errors());
            endif;
        else:
            $this->load->library('upload', config_upload());
            if (isset($_FILES['imagem']) && $_FILES['imagem']['name'] != ''):
                // foi enviada uma imagem, devo fazer o upload
                if ($this->upload->do_upload('imagem')):
                    // upload foi efetudado
                    $imagem_antiga = 'uploads/' . $noticia->imagem;
                    $dados_upload = $this->upload->data();
                    $dados_form = $this->input->post();
                    $dados_update['titulo'] = to_bd($dados_form['titulo']);
                    $dados_update['conteudo'] = to_bd($dados_form['conteudo']);
                    $dados_update['imagem'] = $dados_upload['file_name'];
                    if ($this->noticia->salvar($dados_update)):
                        unlink($imagem_antiga);
                        set_msg('<p>Notícia alterada com sucesso!</p>');
                        $dados['noticia']->imagem = $dados_update['imagem'];
                        // redirect('noticia/listar', 'refresh');
                    else:
                        set_msg('<p>Nenhuma alteração foi salva!</p>');
                    endif;
                else:
                    // erro no upload
                    $msg = $this->upload->display_errors();
                    $msg .= '<p>São permitidos arquivos JPG e PNG de até 512Kb.</p>';
                    set_msg($msg);
                endif;
            else:
                // não foi enviada uma imagem pelo form
                $dados_form = $this->input->post();
                $dados_update['titulo'] = to_bd($dados_form['titulo']);
                $dados_update['conteudo'] = to_bd($dados_form['conteudo']);
                if ($this->noticia->salvar($dados_update)):
                    set_msg('<p>Notícia alterada com sucesso!</p>');
                    // redirect('noticia/listar', 'refresh');
                else:
                    set_msg('<p>Nenhuma alteração foi salva!</p>');
                endif;


            endif;
        endif;

        // carrega as views
        $dados['titulo'] = 'Alteração de Notícia';
        $dados['h2'] = 'Alteração de Notícias';
        $dados['tela'] = 'editar';
        $this->load->view('painel/noticias', $dados);
    }

}
