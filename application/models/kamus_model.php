<?php
class kamus_model extends CI_Model {

    var $tabel = 'kamus';

    function __construct() {
        parent::__construct();
    }

	function get($limit, $start) {
        $sql = 'select * from kamus order by id limit ' . $start . ', ' . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }

    function insert() {
    	$data['title'] = 'CRUD CodeIgniter Studi Kasus Barang'; //judul title
        $myFile = "kamus.txt";
        $lines = file($myFile);

        foreach ($lines as $value) {
            $data = array('content' => $value);
            $this->db->insert($this->tabel, $data);
        }
    }

    function filter_spam() {
        // $this->db->where('type', 'SPAM');
        $this->db->truncate('result'); 
        $this->db->from($this->tabel);

        $data['filter'] = $this->db->get()->result();
        $arr_kamus = [];

        foreach ($data['filter'] as $value) {            
            array_push($arr_kamus, $value->content);
        }

        for ($i=0; $i < count($arr_kamus); $i++) { 
            $a =  trim($arr_kamus[$i]);
            $where = "content like '%$a%'";
            $this->db->from($this->master_sms);
            $this->db->like('content', $a); 
            
            $filter = $this->db->get();
            foreach ($filter->result() as $val) {
                $result = array(
                    'id' => $val->id,
                    'content' => $val->content,
                    'type' => 'SPAM'
                );
                $query_string = $this->db->insert_string('result', $result);
                $query_string = str_replace('INSERT INTO', 'INSERT IGNORE INTO', $query_string);

                $req = $this->db->query($query_string);
            }
        }

        $this->db->from('result');
        $this->db->where('type','SPAM');
        $query = $this->db->get();
        
        return $query->result();
    }

    function filter_ham() {
        $this->db->where('type', 'HAM');
        $this->db->delete('result'); 
        $this->db->from($this->tabel);
        $data['filter'] = $this->db->get()->result();
        $arr_kamus = [];

        foreach ($data['filter'] as $value) {            
            array_push($arr_kamus, $value->content);
        }

        for ($i=0; $i < count($arr_kamus); $i++) { 
            $a =  trim($arr_kamus[$i]);
            $where = "content not like '%$a%'";
            $this->db->from($this->master_sms);
            $this->db->not_like('content', $a); 
            
            $filter = $this->db->get();

            foreach ($filter->result() as $val) {
                $result = array(
                    'id' => $val->id,
                    'content' => $val->content,
                    'type' => 'HAM'
                );
                $query_string = $this->db->insert_string('result', $result);
                $query_string = str_replace('INSERT INTO', 'INSERT IGNORE INTO', $query_string);

                $req = $this->db->query($query_string);
            }
        }

        $this->db->from('result');
        $this->db->where('type','HAM');
        $query = $this->db->get();
        
        return $query->result();
    }

    function filter_spam_pib() {
        $this->db->where('type', 'SPAM');
        $this->db->delete('result_pib'); 
        $this->db->from($this->tabel);
        $data['filter'] = $this->db->get()->result();
        $arr_kamus = [];

        foreach ($data['filter'] as $value) {            
            array_push($arr_kamus, $value->content);
        }

        for ($i=0; $i < count($arr_kamus); $i++) { 
            $a =  trim($arr_kamus[$i]);
            $where = "content like '%$a%'";
            $this->db->from($this->master_sms_preprocessing);
            $this->db->where($where);
            
            $filter = $this->db->get();

            foreach ($filter->result() as $val) {
                $result = array(
                    'id' => $val->id,
                    'content' => $val->content,
                    'type' => 'SPAM'
                );
                $query_string = $this->db->insert_string('result_pib', $result);
                $query_string = str_replace('INSERT INTO', 'INSERT IGNORE INTO', $query_string);

                $req = $this->db->query($query_string);
            }
        }

        $this->db->from('result_pib');
        $this->db->where('type','SPAM');
        $query = $this->db->get();
        
        return $query->result();
    }

    function filter_ham_pib() {

        $this->db->from('result_pib');
        $data = $this->db->get()->result();
        $m_id = [];

        foreach ($data as $value) {
            array_push($m_id, $value->id);
            $this->db->from('master_sms_preprocessing');
            $this->db->where('id !=', $value->id);
            $obj =  $this->db->get()->result();

            foreach ($obj as $val) {
                $data = array(
                    'id' => $val->id,
                    'content' => $val->content,
                    'type' => 'HAM'
                );
                $this->db->insert('result_pib', $data);
            }
        }

        $this->db->from('result_pib');
        $this->db->where('type','SPAM');
        $query = $this->db->get();
        
        return $query->result();
    }
}
?>
