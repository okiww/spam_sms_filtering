<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class kamus extends CI_Controller {
    var $tabel = 'kamus';

    public function __construct() {
        parent::__construct();
        $this->load->model('kamus_model');
        $this->load->helper('form','url');
    }

    public function index() {
        $data['kamus'] = $this->kamus_model->get();
        $this->load->view('kamus', $data);
    }
}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */