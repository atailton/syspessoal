<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class site extends CI_Controller {

	public function __construct()
    {
        // $this->load does not exist until after you call this
        parent::__construct(); // Construct CI's core so that you can use it

        $this->load->database();
    }

	public function index()
	{

					$this->load->library('session');
					date_default_timezone_set('America/Recife');
					$data['url'] = $this->url();
					$this->load->model('sql_model');
					$Data = date("Y-m-d H:i:s");

					$string = $this->load->view('head', '', TRUE);
					$data['head'] = $string;

					$this->load->view('login',$data);


	}


	public function url()
        {
            $url_verifica = "$_SERVER[HTTP_HOST]";

            if($url_verifica == "localhost")
                {
                    $url = "http://localhost/aquigas/";
                } else {$url = "http://www.syspessoal.pe.hu/";}


			 $url = "http://localhost/syspessoal/";
			 $url = "http://www.syspessoal.pe.hu/";
            return $url;
        }

	public function sistema(){

					$this->load->library('session');
					date_default_timezone_set('America/Recife');
					$data['url'] = $this->url();
					$this->load->model('sql_model');
					$Data = date("Y-m-d H:i:s");



					$this->load->view('sistema',$data);
	}

	public function funcionario(){

					$this->load->library('session');
					date_default_timezone_set('America/Recife');
					$data['url'] = $this->url();
					$this->load->model('sql_model');
					$Data = date("Y-m-d H:i:s");



					$this->load->view('funcionario',$data);
	}

	public function folha(){

					$this->load->library('session');
					date_default_timezone_set('America/Recife');
					$data['url'] = $this->url();
					$this->load->model('sql_model');
					$Data = date("Y-m-d H:i:s");



					$this->load->view('folha',$data);
	}

	public function contracheque(){

					$this->load->library('session');
					date_default_timezone_set('America/Recife');
					$data['url'] = $this->url();
					$this->load->model('sql_model');
					$Data = date("Y-m-d H:i:s");



					$this->load->view('contracheque',$data);
	}

	public function desconto(){

					$this->load->library('session');
					date_default_timezone_set('America/Recife');
					$data['url'] = $this->url();
					$this->load->model('sql_model');
					$Data = date("Y-m-d H:i:s");



					$this->load->view('desconto',$data);
	}








}
