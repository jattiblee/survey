<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Option_Model extends CI_Model {

	function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insertOption($question_sess, $option){
        $now = date('Y-m-d H:i:s');
    	$sql = "INSERT INTO option_tb(question_sess, option, date_option) "
                . "VALUES("
                . "" . $this->db->escape($question_sess) . ", "
                . "" . $this->db->escape($option) . ", "
                . "" . $this->db->escape($now) . ")";
        $this->db->query($sql);
        return $this->db->affected_rows();
    }

    public function allOption()
    {
        $sql = "SELECT * FROM option_tb";
        $result = $this->db->query($sql);
        return $result->result();
    }

}
?>