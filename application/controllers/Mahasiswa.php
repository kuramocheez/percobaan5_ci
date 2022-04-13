<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    }


    public function index()
    {
        $data = [
            'title' => 'Mahasiswa',
            'mahasiswa' => $this->Mahasiswa_model->getAll()
        ];
        $this->load->view('mahasiswa', $data);
    }

    public function input()
    {
        $this->form_validation->set_rules('nim', 'Nim', 'required', [
            'required' => '%s Tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => '%s Tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == TRUE) {
            $data = [
                'nim' => $this->input->post('nim'),
                'nama' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('jk'),
                'jurusan' => $this->input->post('jurusan')
            ];
            $this->Mahasiswa_model->simpan($data);
            $this->session->set_flashdata('inputSuccess', 'Data Mahasiswa Berhasil Ditambahkan');
            redirect('mahasiswa');
            
        }

        $data = [
            'title' => 'Input Mahasiswa',
        ];
        $this->load->view('input', $data);
    }

    public function edit($id){
        $this->form_validation->set_rules('nim', 'Nim', 'required', [
            'required' => '%s Tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => '%s Tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == TRUE) {
            $data = [
                'id' => $id,
                'nim' => $this->input->post('nim'),
                'nama' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('jk'),
                'jurusan' => $this->input->post('jurusan')
            ];
            $this->Mahasiswa_model->edit($data);
            $this->session->set_flashdata('editSuccess', 'Data Mahasiswa Berhasil Diubah');
            redirect('mahasiswa');
        }

        $data = [
            'title' => 'Edit Data Mahasiswa',
            'mahasiswa' => $this->Mahasiswa_model->detail($id)
        ];
        $this->load->view('edit', $data);
    }

    public function delete($id){
        $data = [
            'id' => $id
        ];
        $this->Mahasiswa_model->delete($data);
        $this->session->set_flashdata('deleteSuccess', 'Data Mahasiswa Berhasil Dihapus');

        redirect('mahasiswa');
    }
}

/* End of file Mahasiswa.php */
