<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sms extends CI_Controller {
    var $tabel = 'master_sms';

    public function __construct() {
        parent::__construct();
        $this->load->model('msms');
        $this->load->helper('form','url');
        $this->load->database();
        $this->load->library('pagination');
    }

    public function index() {
        //pagination settings
        $config['base_url'] = "http://".$_SERVER['HTTP_HOST']."/ci_crud/sms/index";
        $config['total_rows'] = $this->db->count_all('master_sms');
        $config['per_page'] = "20";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['title'] = 'CRUD CodeIgniter Studi Kasus Barang'; //judul title
        $data['master_sms'] = $this->msms->getAllSms($config["per_page"], $data['page']); //query model semua barang
        $data['pagination'] = $this->pagination->create_links();

        $this->load->view('sms',$data);
    }

	public function insert_sms()
	{
        $spam = 'spam_sms.xlsx';
        $ham = 'ham_sms.xlsx';
        //load the excel library
        $this->load->library('excel');
        //read file from path
        $objSpam = PHPExcel_IOFactory::load($spam);
        $objHam = PHPExcel_IOFactory::load($ham);
        //get only the Cell Collection
        $collection_spam = $objSpam->getActiveSheet()->getCellCollection();
        $collection_ham = $objHam->getActiveSheet()->getCellCollection();
        //extract to a PHP readable array format
      
        $this->db->truncate('master_sms');
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
                $this->db->insert('master_sms', $data);
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
                $this->db->insert('master_sms', $data);
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