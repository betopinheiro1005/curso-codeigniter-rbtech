<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('option_model', 'option');
        $this->load->model('noticia_model', 'noticia');
    }

    public function index() {
        $dados['titulo'] = 'Home Page | Design Company - Free Website Template';
        $this->load->view('home', $dados);
    }

    public function about() {
        $dados['titulo'] = 'Sobre a Empresa | Design Company - Free Website Template';
        $this->load->view('about', $dados);
    }

    public function privacy() {
        $dados['titulo'] = 'Política de Privacidade | Design Company - Free Website Template';
        $this->load->view('privacy', $dados);
    }

    public function gallery() {
        $dados['titulo'] = 'Galeria | Design Company - Free Website Template';
        $this->load->view('gallery', $dados);
    }

    public function contacts() {
        $this->load->helper('form');
        $this->load->library(array('form_validation', 'email'));

        // regras de validação do formulário
        $this->form_validation->set_rules('nome', 'Nome', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('assunto', 'Assunto', 'trim|required');
        $this->form_validation->set_rules('mensagem', 'Mensagem', 'trim|required');

        // verificação da validação
        if ($this->form_validation->run() == FALSE) {
            $dados['form_error'] = validation_errors();
        } else {
            $dados_form = $this->input->post();
            // print_r($dados_form);
            //Inicia o processo de configuração para o envio do email
            $this->email->from($dados_form['email'], $dados_form['nome']);
            $this->email->to('betopinheiro1005@yahoo.com.br');
            $this->email->subject($dados_form['assunto']);
            $this->email->message($dados_form['mensagem']);

            if ($this->email->send()) {
                $dados['form_error'] = 'Email enviado com sucesso!';
            } else {
                $dados['form_error'] = 'Erro ao enviar o email! Tente novamente em alguns minutos.';
            }
        }

        $dados['titulo'] = 'Fale conosco | Design Company - Free Website Template';
        $this->load->view('contacts', $dados);
    }

    public function sitemap() {
        $dados['titulo'] = 'Mapa do Site | Design Company - Free Website Template';
        $this->load->view('sitemap', $dados);
    }

    public function post() {
        if (($id = $this->uri->segment(2)) > 0):
            if ($noticia = $this->noticia->get_single($id)):
                $dados['titulo'] = to_html($noticia->titulo) . ' - Design Company';
                $dados['not_titulo'] = to_html($noticia->titulo);
                $dados['not_conteudo'] = to_html($noticia->conteudo);
                $dados['not_imagem'] = $noticia->imagem;
            else:
                $dados['titulo'] = 'Página não encontrada - Design Company';
                $dados['not_titulo'] = 'Notícia não encontrada!';
                $dados['not_conteudo'] = '<p>Nenhuma notícia foi encontrada com base nos parâmetros fornecidos!</p>';
                $dados['not_imagem'] = '';
            endif;
        else:
            redirect (base_url(),'refresh');
        endif;
        $this->load->view('post', $dados);
    }

}
