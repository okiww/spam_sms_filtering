<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class testing extends CI_Controller {
    var $tabel = 'master_sms';

    public function __construct() {
        parent::__construct();
        $this->load->model('msms');
        $this->load->helper('form','url');
    }

    public function index() {

        

        $nilai = 6;
        for($i=0;$i<$nilai;$i++){
            for($j=0;$j<=$i;$j++){
                echo "* ";
            }
            echo "<br/>";
        }
        // $data['title'] = 'CRUD CodeIgniter Studi Kasus Barang'; //judul title
        // $data['master_sms'] = $this->msms->getAllSms(); //query model semua barang

        // $this->load->view('sms',$data);
    }
}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */