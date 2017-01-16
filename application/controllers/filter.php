<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class filter extends CI_Controller {
    var $kamus = 'kamus';
    var $master_sms = 'master_sms';

    public function __construct() {
        parent::__construct();
        $this->load->model('msms');
        $this->load->model('kamus_model');
        $this->load->helper('form','url');
    }

    public function index() {
        $data['title'] = 'CRUD CodeIgniter Studi Kasus Barang'; //judul title
        $data['spam'] = $this->kamus_model->filter_spam();
        $data['ham'] = $this->kamus_model->filter_ham();
        // print_r($data['filter']);
        $data['count_spam'] = count($data['spam']);
        $data['count_ham'] = count($data['ham']);

        $this->load->view('filter',$data); 
    }
}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */