<?php
class msms extends CI_Model {

    var $tabel = 'master_sms';

    function __construct() {
        parent::__construct();
    }

	function getAllSms($limit, $start) {
        $sql = 'select * from master_sms order by id limit ' . $start . ', ' . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }
}
?>
