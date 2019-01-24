<?php

 defined('BASEPATH') OR exit('No direct script access allowed');

 class Exemplo1 extends CI_Controller {

   function __construct() {
     parent::__construct();
     // $this->load->model('Exemplo1_model');
     $this->load->model('Exemplo1_model', 'exemplo1');     
   }

   public function index() {
     // echo "Executado método index do controller";
//     $dados['titulo'] = 'Essa é a minha primeira view!';
     $dados['titulo'] = 'Essa é a minha segunda view!';
     $dados['conteudo'] = 'The page you are looking at is being generated dynamically by CodeIgniter.';
     $this->load->view('exemplo1', $dados);
     // $this->load->view('exemplo1');
   }

   public function login() {
//     echo "Executado método login do controller";
//     echo " e passado o parametro ";
//     echo $this->uri->segment(3);
     //$this->Exemplo1_model->salvar();
     $this->exemplo1->salvar();
   }

 }
 