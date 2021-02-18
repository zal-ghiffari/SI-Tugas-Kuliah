<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require (APPPATH.'/libraries/REST_Controller.php');
use Restserver\Libraries\REST_Controller;

class Apicrud extends REST_Controller {

	public function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }
	
	function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $tugas = $this->db->get('tugas')->result();
        } else {
            $this->db->where('id', $id);
            $tugas = $this->db->get('tugas')->result();
        }
        $this->response($tugas, 200);
    }
	
	function index_post() {
        $data = array('id' => $this->post('id'),'matakul' => $this->post('matakul'),'judul' => $this->post('judul'),'deskripsi' => $this->post('deskripsi'),'jenis' => $this->post('jenis'),'deadline' => $this->post('deadline'),'selesai' => $this->post('selesai'));
        $insert = $this->db->insert('tugas', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
	
	function index_put() {
        $id = $this->put('id');
        $data = array('id' => $this->post('id'),'matakul' => $this->post('matakul'),'judul' => $this->post('judul'),'deskripsi' => $this->post('deskripsi'),'jenis' => $this->post('jenis'),'deadline' => $this->post('deadline'),'selesai' => $this->post('selesai'));
        $this->db->where('id', $id);
        $update = $this->db->update('tugas', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_delete() {
        $id = $this->delete('id');
        $this->db->where('id', $id);
        $delete = $this->db->delete('tugas');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}
