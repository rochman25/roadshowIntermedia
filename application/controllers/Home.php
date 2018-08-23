<?php

/**
 * 
 */
class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('DataModel');
    }

    function index() {
        $data['siswa'] = $this->DataModel->baca();
        $this->load->view('index', $data);
    }

}

?>