<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Spp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("spp_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["spp"] = $this->spp_model->getAll();
        $this->load->view("admin/spp/list", $data);
    }

    public function add()
    {
        $product = $this->spp_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/spp'));
        }

        $this->load->view("admin/spp/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/products');
       
        $product = $this->spp_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/spp'));
            
        }

        $data["spp"] = $product->getById($id);
        if (!$data["spp"]) show_404();
        
        $this->load->view("admin/spp/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->spp_model->delete($id)) {
            redirect(site_url('admin/spp'));
        }
    }
}