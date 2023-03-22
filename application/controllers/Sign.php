<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Sign In',
            'isi'   => 'sign/in'
        );
        $this->load->view('layout/wrapper', $data, FALSE);
    }
    public function in()
    {
        $email  = $this->input->post('email');
        $password = $this->input->post('password');
        $url = 'http://localhost/film_rest/rest/user';
        $getUrl = $url.'?email='.$email.'&password='.$password;
        $data = file_get_contents($getUrl);
        $data = json_decode($data, true);
        if ($data['status'] === 'true') {
            $dataUser = $data['result'];

            $id_user = $dataUser['id_user'];
            $username = $dataUser['nama_depan'].' '.$dataUser['nama_belakang'];
            $usia = $dataUser['usia'];
            $email = $dataUser['email']; 
            $message = $data['message'];     
            $this->session->set_userdata('id_user',$id_user);
            $this->session->set_userdata('username',$username);
            $this->session->set_userdata('usia',$usia);
            $this->session->set_userdata('email',$email);
            redirect('profil');
        } else {
            $message = $data['message'];
            redirect('sign');
        }

    // $cek_login = $this->user_model->cek_login_user($email,$password);
    }
    public function out()
    {
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('usia');
        $this->session->set_userdata('email');
        session_destroy();
        redirect('profil');
    }

}
