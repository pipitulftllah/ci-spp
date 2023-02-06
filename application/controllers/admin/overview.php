<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Overview extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin');
    }

    public function index()
    {
        $data['siswa'] = $this->admin->getAllUser();
        $this->load->view('admin/overview', $data);
    }
}
