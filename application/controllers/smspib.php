<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Smspib extends CI_Controller {
    var $tabel = 'master_sms_preprocessing';

    public function __construct() {
        parent::__construct();
        $this->load->model('msmspib');
        $this->load->helper('form','url');
    }

    public function index() {
        $data['title'] = 'CRUD CodeIgniter Studi Kasus Barang'; //judul title
        $data['smspib'] = $this->msmspib->getAllSms(); //query model semua barang
        // $this->insert_sms();
        $this->load->view('vsmspib',$data);
    }

    public function insert_sms()
    {
        $spam = 'Spam(preprocessing).xlsx';
        $ham = 'ham(preprocessing).xlsx';
        //load the excel library
        $this->load->library('excel');
        //read file from path
        $objSpam = PHPExcel_IOFactory::load($spam);
        $objHam = PHPExcel_IOFactory::load($ham);
        //get only the Cell Collection
        $collection_spam = $objSpam->getActiveSheet()->getCellCollection();
        $collection_ham = $objHam->getActiveSheet()->getCellCollection();
        //extract to a PHP readable array format
      
        $this->db->truncate('master_sms_preprocessing');
        foreach ($collection_spam as $cell) {
            $column = $objSpam->getActiveSheet()->getCell($cell)->getColumn();
            $row = $objSpam->getActiveSheet()->getCell($cell)->getRow();
            $data_value = $objSpam->getActiveSheet()->getCell($cell)->getValue();
            //header will/should be in row 1 only. of course this can be modified to suit your need;

            if ($row == 1) {
                $header[$row][$column] = $data_value;
                
            } else {
                $arr_data[$row][$column] = $data_value;
                $data = array(
                    'content' => $arr_data[$row][$column]
                );
                $this->db->insert('master_sms_preprocessing', $data);
            }
        }
        foreach ($collection_ham as $cell) {
            $column = $objHam->getActiveSheet()->getCell($cell)->getColumn();
            $row = $objHam->getActiveSheet()->getCell($cell)->getRow();
            $data_value = $objHam->getActiveSheet()->getCell($cell)->getValue();
            //header will/should be in row 1 only. of course this can be modified to suit your need;

            if ($row == 1) {
                $header[$row][$column] = $data_value;
                
            } else {
                $arr_data[$row][$column] = $data_value;
                $data = array(
                    'content' => $arr_data[$row][$column]
                );
                $this->db->insert('master_sms_preprocessing', $data);
            }
        }
        $this->db->where("(content='SPAM' OR content='HAM')");
        $this->db->delete($this->tabel);
        //send the data in an array format
        $data['header'] = $header;
        $data['values'] = $arr_data;
    }
}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */