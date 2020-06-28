<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 */
class Kerusakan extends My_Controller
{

    public $data = array(
        'title' => 'Sistem Informasi Perusahaan',
        'main_view' => 'content/home',
        'page_title' => '',
    );

    public function __construct()
    {
        parent::__construct();
        $this->load->model('general_model','general');
        $this->load->helper(array('role_form_helper','xss_helper'));
        $this->load->library('datatables');
        $this->cekLoginAdmin();
    }

    #+++++++++++++++++++++++++++++ CORE Content To Next Project ++++++++++++++++++++++++++#

    public function index()
    {
        $this->data['page_title'] = 'Form Kerusakan';
        $this->data['main_view'] = 'content/add';
        $this->data['data'] = $this->general->get('m_cabang',1);
        $this->load->view('template', $this->data);
    }

   


    public function add()
    {
        $this->data['page_title'] = 'Add Group';
        $this->data['main_view'] = 'content/add';
        $this->load->view('template', $this->data);
    }

    public function act_add()
    {

        $nama = $this->input->post('nama_cabang');
        $regional = $this->input->post('regional');


        $action = $this->general->create('m_cabang', array('nama_cabang' => $nama,'regional'=>$regional));
        if ($action) {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully');window.location.href='".base_url('cabang')."';</script>");
        }

    }

    public function kuy()
    {
        for($i=0;$i<=36;$i++){
            $this->general->create('t_menu_user', array('id_user' => 1, 'id_menu' => $i));
        }
    }

    public function edit($id = false)
    {
        $this->data['page_title'] = 'Edit Cabang';
        $this->data['main_view'] = 'content/edit';
        $this->data['data'] = $this->general->getwhere('m_cabang',array('id'=>$id));

        // $this->data['data'] = $this->general->getwhere('m_user',array('id'=>$id),false);
        
        $this->load->view('template', $this->data);
    }

    public function act_edit($id = false)
    {


        $nama = $this->input->post('nama_cabang');
        $regional = $this->input->post('regional');

        $action = $this->general->update('m_cabang', array('id'=>$id), array('nama_cabang' => $nama,'regional' => $regional));
        if ($action) {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully');window.location.href='".base_url('cabang')."';</script>");
        }

    }

    
    public function delete($id = false)
    {
        $action = $this->general->delete('m_cabang', array('id'=>$id));
        
        if ($action) {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully');window.location.href='".base_url('cabang')."';</script>");
        }

    }
}

