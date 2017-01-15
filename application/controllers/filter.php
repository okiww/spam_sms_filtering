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
        $data['filter'] = $this->kamus_model->filter();
        $arr_kamus = [];
        $this->load->view('filter',$data);

        // foreach ($data['filter'] as $value) {
        //     array_push($arr_kamus, $value->content);
        //     $key = trim($value->content);
        //     $where = "content like '%$key%'";
        //     $this->db->from($this->master_sms);
        //     $this->db->where($where);

        //     $filter = $this->db->get()->result();

        //     print_r($filter);
        // }

        // print_r($data);
        // $a =  trim($arr_kamus[0]);
        // $where = "content like '%$a%'";
        // $this->db->from($this->master_sms);
        // $this->db->where($where);
        
            // $filter = $this->db->get();

        // print_r($filter);
        
    }
}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */