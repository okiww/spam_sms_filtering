<?php
class msmspib extends CI_Model {

    var $tabel = 'master_sms_preprocessing';

    function __construct() {
        parent::__construct();
    }

    function getAllSms($limit, $start) {
        $sql = 'select * from master_sms_preprocessing order by id limit ' . $start . ', ' . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }
}
?>
