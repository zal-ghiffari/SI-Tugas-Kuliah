<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->database();
    }
	
	public function index()
	{
        $search = $this->input->get('search');
        if (!empty($search)) {
            $this->db->like('matkul', $search, 'both'); 
            $this->db->or_like('judul', $search, 'both'); 
            $this->db->or_like('deskripsi', $search, 'both'); 
        }
        $tugas = $this->db->get('tugas');
        $data['result'] = $tugas->result_array();
        $data['num_rows'] = $tugas->num_rows();
        $this->load->view('head');
        $this->load->view('read', $data);
        $this->load->view('foot');
	}
	
	public function save()
    {
        $input['id'] = $this->input->post('id');
        $input['matakul'] = $this->input->post('matakul');
        $input['judul'] = $this->input->post('judul');
        $input['deskripsi'] = $this->input->post('deskripsi');
		$input['jenis'] = $this->input->post('jenis');
		$input['deadline'] = $this->input->post('deadline');
        $updateID = $this->input->post('updateID');
        if (!empty($updateID)) {
            $this->db->where('id', $updateID);
            $this->db->update('tugas', $input);
        } else {
            $this->db->insert('tugas', $input);
        }
        redirect('/welcome/index');
    }

    public function create()
    {
        $this->load->view('head');
        $this->load->view('create');
        $this->load->view('foot');
    }

    public function update($id)
    {
        $this->db->where('id', $id);
        $data['update'] = $this->db->get('tugas')->row_array();
        $this->load->view('head');
        $this->load->view('create', $data);
        $this->load->view('foot');
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $data['delete'] = $this->db->get('tugas')->row_array();
        $this->load->view('head');
        $this->load->view('delete', $data);
        $this->load->view('foot');
    }

    public function real_delete()
    {
        $npt = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->delete('tugas');
        redirect('/welcome/');
    }
}