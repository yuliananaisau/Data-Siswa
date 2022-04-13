<?php
class Datasiswa extends CI_Controller
{
 public function index()
 {
 $this->load->view('view-form-datasiswa');
 }
 public function cetak()
 {
    $this->form_validation->set_rules('nis', 'NIS', 
    'required|min_length[8]', [
     'required' => 'NIS Harus diisi',
     'min_lenght' => 'NIS terlalu pendek'
     ]);
     if ($this->form_validation->run() != true) {
     $this->load->view('view-form-datasiswa');
     } else {
     $data = [
     'nama' => $this->input->post('nama'),
     'nis' => $this->input->post('nis'),
     'kelas' => $this->input->post('kelas'),
     'lahir' => $this->input->post('lahir'),
     'tempat' => $this->input->post('tempat'),
     'alamat' => $this->input->post('alamat'),
     'jeskel' => $this->input->post('jeskel'),
     'agama' => $this->input->post('agama'),
     ];
     $this->load->view('view-data-siswa', $data);
     }
     }
    }