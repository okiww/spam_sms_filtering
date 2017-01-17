<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Result extends CI_Controller {
    var $tabel = 'master_sms';

    public function __construct() {
        parent::__construct();
        $this->load->model('msms');
        $this->load->helper('form','url');
    }

    public function index() {
        $data['master_sms']= $this->msms->getAllSms();
        $this->load->view('vresult', $data);
    }
}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */