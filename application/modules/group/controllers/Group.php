<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 */
class Group extends My_Controller
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
        $this->data['page_title'] = 'List Group';
        $this->data['main_view'] = 'content/view';
        $this->data['data'] = $this->general->get('m_group',1);
        $this->load->view('template', $this->data);
    }

    public function hak_akses($id = false)
    {
        $this->data['page_title'] = 'Hak Akses';
        $this->data['main_view'] = 'content/view_hak';
        $this->data['id_group'] = $id;
        $this->data['menu_all'] = $this->general->get_query_natural("select * from m_menu WHERE parent_id = 0",1);
        $this->data['menu_group'] = $this->general->get_query_natural("select * from m_menu_group left JOIN m_menu on m_menu.id = m_menu_group.id_group WHERE id_group = $id",1);
        $this->load->view('template', $this->data);
    }


    public function act_update($idGroup)
    {

        $nama = $this->input->post('nama');

        $delete = $this->general->delete('m_menu_group', array('id_group' => $idGroup));

        for ($i=0; $i < count($nama); $i++) {

            $insertNew = $this->general->create('m_menu_group', array('id_menu' => $nama[$i], 'id_group' => $idGroup));
        }


        if ($delete && $insertNew) {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully');window.location.href='".base_url('group')."';</script>");
        }

    }


    public function add()
    {
        $this->data['page_title'] = 'Add Group';
        $this->data['main_view'] = 'content/add';
        $this->load->view('template', $this->data);
    }

    public function act_add()
    {

        $nama = $this->input->post('nama_group');


        $action = $this->general->create('m_group', array('nama_group' => $nama));
        if ($action) {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully');window.location.href='".base_url('group')."';</script>");
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
        $this->data['page_title'] = 'Edit Group';
        $this->data['main_view'] = 'content/edit';
        $this->data['data'] = $this->general->getwhere('m_group',array('id'=>$id));

        // $this->data['data'] = $this->general->getwhere('m_user',array('id'=>$id),false);
        
        $this->load->view('template', $this->data);
    }

    public function act_edit($id = false)
    {


        $nama = $this->input->post('nama_group');

        $action = $this->general->update('m_group', array('id'=>$id), array('nama_group' => $nama));
        if ($action) {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully');window.location.href='".base_url('group')."';</script>");
        }

    }

    
    public function delete($id = false)
    {
        $action = $this->general->delete('m_group', array('id'=>$id));
        
        $this->general->delete('m_menu_group', array('id_group'=>$id));
        
        if ($action) {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully');window.location.href='".base_url('group')."';</script>");
        }

    }
}

