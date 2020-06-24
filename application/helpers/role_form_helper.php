<?php
/**
 * Created by PhpStorm.
 * User: Dede Irawan,S.kom
 * Date: 01/01/2002
 * Time: 0:20
 */

function form_rules_login()
{
    $form_rules = array(
        array('field' => 'username',
            'label' => 'username',
            //'rules' => 'required|trim|valid_email' ),
        'rules' => 'required|trim' ),
        array(
            'field' => 'password',
            'label' => 'password',
            'rules' => 'required|trim|alpha_numeric',
            'errors' => array(
            'alpha_numeric' => '%s hanya boleh berisi huruf dan angka',
            ),),
    );

    return $form_rules;
}


#################### BATAS RULE DAN FUNCTION VALIDASI ##############################################

function validation_login()
{
    $ci = &get_instance();
    $ci->load->library('form_validation');

    $si = &get_instance();
    $si->load->library('session');

    $form = form_rules_login();

    $ci->form_validation->set_rules($form);
    if($ci->form_validation->run())
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    }
}

