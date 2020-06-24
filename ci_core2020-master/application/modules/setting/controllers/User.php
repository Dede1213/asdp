<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

  function index()
  {
    
    $this->data['page_title'] = 'Data formulir';
    $this->data['menu_tab'] = '1';
    $this->data['main_view'] = 'content/v_user';
    $this->load->view('template', $this->data);
  }

  

}
