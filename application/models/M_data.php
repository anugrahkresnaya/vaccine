<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model {
	public function getAllUser() {
		return $this->db->get('data_vac')->result_array();
	}

	public function inputData() {
		$data = [
			"nik" => $this->input->post('nik', true),
			"nama" => $this->input->post('nama', true),
			"alamat" => $this->input->post('alamat', true),
			"tgl_vac1" => $this->input->post('tgl_vac1', true),
			"tgl_vac2" => $this->input->post('tgl_vac2', true)
		];
		$this->db->insert('data_vac', $data);
		$this->session->set_flashdata('pesan', 'Ditambah');
	}

	public function updateData() {
		$data = [
			"nik" => $this->input->post('nik', true),
			"nama" => $this->input->post('nama', true),
			"alamat" => $this->input->post('alamat', true),
			"tgl_vac1" => $this->input->post('tgl_vac1', true),
			"tgl_vac2" => $this->input->post('tgl_vac2', true)
		];
		$this->db->where('id_user', $this->input->post('id_user'));
		$this->db->update('data_vac', $data);
		$this->session->set_flashdata('pesan', 'Diubah');
	}

	public function hapusData($id) {
		$this->db->delete('data_vac', ['id_user' => $id]);
		$this->session->set_flashdata('pesan', 'Dihapus');
	}

	public function getUserById($id) {
		return $this->db->get_where('data_vac', ['id_user' => $id])->row_array();
	}
}
