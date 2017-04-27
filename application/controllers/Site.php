<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller
{


    public function index()
    {
        $logado = true;

        if ($logado == true):


            $this->load->view('site/painel');

        else:

            $dado = array([

                "title" => "",
                "description" => "",
                "autor" => "",
                "favicon" => ""

            ]);
            $this->load->view('landing/home',$dado[0]);

        endif;
    }

    public function entrar()
    {
        $logado = false;

        if ($logado == true):


            $this->load->view('site/painel');

        else:

            $dado = array([

                "title" => "",
                "description" => "",
                "autor" => "",
                "favicon" => ""

            ]);
            $this->load->view('landing/login',$dado[0]);

        endif;
    }

    public function cadastrar()
    {
        $logado = false;

        if ($logado == true):


            $this->load->view('site/painel');

        else:

            $dado = array([

                "title" => "",
                "description" => "",
                "autor" => "",
                "favicon" => ""

            ]);
            $this->load->view('landing/cadastro',$dado[0]);

        endif;
    }
}
