<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data                          = array();
        $data['all_featured_products'] = $this->web_model->get_all_featured_product();
        $data['all_new_products']      = $this->web_model->get_all_new_product();
        $this->load->view('web/header');
        $this->load->view('web/content', $data);
        $this->load->view('web/footer');
	}

	public function single($id)
    {
        $data                       = array();
        $data['get_single_product'] = $this->web_model->get_single_product($id);
        $data['get_all_category']   = $this->web_model->get_all_category();
        $this->load->view('web/header');
        $this->load->view('web/single', $data);
        $this->load->view('web/footer');
    }

    public function error()
    {
        $data = array();
        $this->load->view('web/header');
        $this->load->view('web/error');
        $this->load->view('web/footer');
    }
}
