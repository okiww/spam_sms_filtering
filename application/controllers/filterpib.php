<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class filterpib extends CI_Controller {
    var $kamus = 'kamus';
    var $master_sms_preprocessing = 'master_sms_preprocessing';

    public function __construct() {
        parent::__construct();
        $this->load->model('kamus_model');
        $this->load->helper('form','url');
    }

    public function index() {
        $data['title'] = 'CRUD CodeIgniter Studi Kasus Barang'; //judul title
        $data['spam'] = $this->kamus_model->filter_spam_pib();
        // $data['ham'] = $this->kamus_model->filter_ham_pib();
        // print_r($data['filter']);
        $data['count_spam'] = count($data['spam']);
        // $data['count_ham'] = count($data['ham']);

        $this->load->view('filterpib',$data); 
    }
}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */