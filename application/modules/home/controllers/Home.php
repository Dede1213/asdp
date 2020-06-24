<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller{

  public $data = array(
    'title' => 'ci_core2020',
    'main_view' => 'content/home',
    'page_title' => 'Home',
  );

  public function __construct()
    {
        parent::__construct();
        // $this->load->model('dashboard_model','dashboard');
        // $this->load->helper(array('role_form_helper','xss_helper'));
        // $this->load->library('datatables');
        $this->cekLoginAdmin();
    }


  function index()
  {
    
    $this->data['page_title'] = '';
    $this->data['main_view'] = 'content/v_home';
    $this->load->view('template', $this->data);
  }

  

}
