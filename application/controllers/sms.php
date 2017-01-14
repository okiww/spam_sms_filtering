<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sms extends CI_Controller {
    var $tabel = 'master_sms';

    public function __construct() {
        parent::__construct();
        $this->load->model('msms');
        $this->load->helper('form','url');
    }

    public function index() {
        $data['title'] = 'CRUD CodeIgniter Studi Kasus Barang'; //judul title
        $data['master_sms'] = $this->msms->getAllSms(); //query model semua barang

        $this->load->view('sms',$data);
    }

	public function insert_sms()
	{
        $file = 'spam_sms.xlsx';
        //load the excel library
        $this->load->library('excel');
        //read file from path
        $objPHPExcel = PHPExcel_IOFactory::load($file);
        //get only the Cell Collection
        $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
        //extract to a PHP readable array format
        $i = 1;
        $this->db->truncate('master_sms');
        foreach ($cell_collection as $cell) {
            $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
            $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
            $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
            //header will/should be in row 1 only. of course this can be modified to suit your need.
            if ($row == 1) {
                $header[$row][$column] = $data_value;
                
            } else {
                $arr_data[$row][$column] = $data_value;
                $data = array(
                    'id' => $i,
                    'content' => $arr_data[$row][$column]
                );
                $this->db->insert('master_sms', $data);
            }
            $i++;
        }
        $tabel = 'master_sms';
        $this->db->where('content', "SPAM");
        $this->db->delete($this->tabel);
        //send the data in an array format
        $data['header'] = $header;
        $data['values'] = $arr_data;
	}
}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */