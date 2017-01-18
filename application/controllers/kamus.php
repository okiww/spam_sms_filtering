<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class kamus extends CI_Controller {
    var $tabel = 'kamus';

    public function __construct() {
        parent::__construct();
        $this->load->model('kamus_model');
        $this->load->helper('form','url');
        $this->load->database();
        $this->load->library('pagination');
    }

    public function index() {
        $config['base_url'] = "http://".$_SERVER['HTTP_HOST']."/ci_crud/kamus/index";
        $config['total_rows'] = $this->db->count_all('kamus');
        $config['per_page'] = "10";
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
        $data['title'] = 'CORPUS SMS SPAM'; //judul title
        $data['kamus'] = $this->kamus_model->get($config["per_page"], $data['page']); //query model semua barang
        $data['pagination'] = $this->pagination->create_links();

        $this->load->view('kamus',$data);
    }
}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */