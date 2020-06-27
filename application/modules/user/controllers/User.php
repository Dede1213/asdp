<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 */
class User extends My_Controller
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
        $this->data['page_title'] = 'List User';
        $this->data['main_view'] = 'content/view';
        $this->data['data'] = $this->general->get_query_natural('select a.*,b.nama_group from m_user a left join m_group b on a.id_group = b.id',1);
        $this->load->view('template', $this->data);
    }

   


    public function add()
    {
        $this->data['page_title'] = 'Add User';
        $this->data['main_view'] = 'content/add';
        $this->data['group'] = $this->general->get_query_natural("select * from m_group",1);
        $this->load->view('template', $this->data);
    }

    public function act_add()
    {

        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = hash('sha256',$this->input->post('password'));
        $group = $this->input->post('group');


        $action = $this->general->create('m_user', array('nama' => $nama,'username' => $username, 'password' => $password,'id_group'=>$group));
        if ($action) {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully');window.location.href='".base_url('user')."';</script>");
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
        $this->data['page_title'] = 'Edit User';
        $this->data['main_view'] = 'content/edit';
        $this->data['data'] = $this->general->get_query_natural("select a.*,b.id as id_group,b.nama_group from m_user a left join m_group b on a.id_group = b.id where a.id='$id'");
        $this->data['group'] = $this->general->get_query_natural("select * from m_group",1);

        // $this->data['data'] = $this->general->getwhere('m_user',array('id'=>$id),false);
        
        $this->load->view('template', $this->data);
    }

    public function act_edit($id = false)
    {


        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $group = $this->input->post('group');

        $action = $this->general->update('m_user', array('id'=>$id), array('nama' => $nama, 'username' => $username,'id_group' => $group));
        if ($action) {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully');window.location.href='".base_url('user')."';</script>");
        }

    }

    public function reset_password($id = false)
    {
        $pass_default = hash('sha256','123456');

        $action = $this->general->update('m_user', array('id'=>$id), array('password' => $pass_default));
        if ($action) {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully');window.location.href='".base_url('user')."';</script>");
        }

    }

    public function delete($id = false)
    {
        $action = $this->general->delete('m_user', array('id'=>$id));
        
        $this->general->delete('m_menu_user', array('id_user'=>$id));
        
        if ($action) {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully');window.location.href='".base_url('user')."';</script>");
        }

    }
}

