<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('set_msg')):
    // seta uma mensagem via session para ser lida posteriormente
    function set_msg($msg = NULL) {
        $ci = & get_instance();
        $ci->session->set_userdata('aviso', $msg);
        // var_dump($_SESSION);
    }
endif;

if (!function_exists('get_msg')) {
    // retorna uma mensagem definida pela função set_msg
    function get_msg($destroy = TRUE) {
        $ci = & get_instance();
        $retorno = $ci->session->userdata('aviso');
        // var_dump($_SESSION);
        if ($destroy)
            $ci->session->unset_userdata('aviso');
        return $retorno;
    }

}

if (!function_exists('verifica_login')) {
    // verifica se o usuário está logado, caso negativo redireciona para outra página
    function verifica_login($redirect = 'setup/login') {
        $ci = & get_instance();
        if ($ci->session->userdata('logged') != TRUE) {
            set_msg('<p>Acesso restrito!<br />Faça login para continuar!</p>');
            redirect($redirect, 'refresh');
        }
    }
}

if (!function_exists('config_upload')) :
    // define as configurações para upload de arquivos/imagens
    function config_upload($path = './uploads/', $types = 'jpg|png', $size=512) {
        $config['upload_path'] = $path;
        $config['allowed_types'] = $types;
        $config['max_size'] = $size;
        return $config;
    }
endif;

if (!function_exists('to_bd')) :
    // codifica o html para salvar no banco de dados
    function to_bd($string=NULL) {
        return htmlentities($string);
    }
endif;

if (!function_exists('to_html')) :
    // decodifica o html e remove barras invertidas do conteúdo
    function to_html($string=NULL) {
        return html_entity_decode($string);
    }
endif;

if (!function_exists('resumo_post')) :
    // gera um text parcial à partir do conteúdo de um post
    function resumo_post($string=NULL, $tamanho=100) {
        $string = to_html($string);
        $string = strip_tags($string);
        $string= substr($string, 0, $tamanho);
        return $string;
    }
endif;
