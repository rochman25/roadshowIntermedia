<?php

/**
 * 
 */
class InputData extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('DataModel');
        $this->load->library('form_validation');
    }

    function index() {
        $this->load->view('Form');
    }

    function input() {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('tgl', 'Tanggal lahir', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $jk = $this->input->post('jk');
        $alamat = $this->input->post('alamat');
        $jurusan = $this->input->post('jurusan');
        $tgl = $this->input->post('tgl');
        $hobi = $this->input->post('hobi');

        $d = date("d-m-y");
        $file = "";
        $berkas = str_replace(" ", "_", $nama) . "_" . $d;

        if (is_array($hobi)) {
            $h = implode(",", $hobi);
        }

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Form');
        } else {
            if (!empty($_FILES['foto']['name'])) {
                $file = substr(strrchr($_FILES['foto']['name'], '.'), 1);
                $config['upload_path'] = 'assets';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['file_name'] = $berkas;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('foto')) {
                    echo 'upload gagal';
                } else {
                    $this->upload->data();
                }
                $berkas = $berkas . '.' . $file;
                $data = array(
                    'nama_siswa' => $nama,
                    'jk' => $jk,
                    'alamat' => $alamat,
                    'tgl_lahir' => $tgl,
                    'email' => $email,
                    'jurusan' => $jurusan,
                    'hobby' => $h,
                    'foto' => $berkas
                );
                $input = $this->DataModel->input($data);
                if ($input == FALSE) {
                    echo "input data gagal";
                } else {
                    redirect('Home/index');
                }
            }
        }
    }

    function edit($id) {
        $data['siswa'] = $this->DataModel->bacaById($id);
        $this->load->view('FormEdit', $data);
    }

    function prosesEdit($id) {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('tgl', 'Tanggal lahir', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        $nama = $this->input->post('nama');
        $jk = $this->input->post('jk');
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');
        $jurusan = $this->input->post('jurusan');
        $tgl = $this->input->post('tgl');
        $hobi = $this->input->post('hobi');

        $d = date("d-m-y");
        $file = "";
        $berkas = str_replace(" ", "_", $nama) . "_" . $d;

        if (is_array($hobi)) {
            $h = implode(",", $hobi);
        }

        if ($this->form_validation->run() == FALSE) {
            redirect('InputData/edit');
        } else {
            if (!empty($_FILES['foto']['name'])) {
                $config = 'assets/';
                $data = $this->DataModel->bacaById($id);
                $path = $config . $data->foto;
                unlink(FCPATH . $path);
                $file = substr(strrchr($_FILES['foto']['name'], '.'), 1);
                $config['upload_path'] = 'assets';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['file_name'] = $berkas;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('foto')) {
                    echo 'upload gagal';
                } else {
                    $this->upload->data();
                }
                $berkas = $berkas . '.' . $file;
                $data = array(
                    'nama_siswa' => $nama,
                    'jk' => $jk,
                    'alamat' => $alamat,
                    'tgl_lahir' => $tgl,
                    'email' => $email,
                    'jurusan' => $jurusan,
                    'hobby' => $h,
                    'foto' => $berkas
                );
                $input = $this->DataModel->edit($id, $data);
                if ($input == FALSE) {
                    echo "Edit data gagal";
                } else {
                    redirect('Home');
                }
            } else {
                $data = array(
                    'nama_siswa' => $nama,
                    'jk' => $jk,
                    'alamat' => $alamat,
                    'tgl_lahir' => $tgl,
                    'email' => $email,
                    'jurusan' => $jurusan,
                    'hobby' => $h
                );
                $query = $this->DataModel->edit($id, $data);
                redirect('Home');
            }
        }
    }

    function hapus($id) {
        $config = 'assets/';
        $data = $this->DataModel->bacaById($id);
        $path = $config . $data->foto;
        unlink(FCPATH . $path);
        $hapus = $this->DataModel->hapus($id);
        if ($hapus == FALSE) {
            echo "Hapus Data Gagal";
        } else {
            redirect('Home');
        }
    }

}

?>