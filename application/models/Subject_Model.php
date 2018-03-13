<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Subject_Model extends CI_Model {

	function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insertSubject($id_user, $subject_sess, $subject){
    	$now = date('Y-m-d H:i:s');
    	$sql = "INSERT INTO subject_tb(id_user, subject_sess, subject, date_subject) "
                . "VALUES("
                . "" . $this->db->escape($id_user) . ", "
                . "" . $this->db->escape($subject_sess) . ", "
                . "" . $this->db->escape($subject) . ", "
                . "" . $this->db->escape($now) . ")";
        $this->db->query($sql);
        return $this->db->affected_rows();
    }

    public function getSubjectBySubjSession($subject_sess){
    	$sql = "SELECT * FROM subject_tb WHERE subject_sess = " . $this->db->escape($subject_sess) . " ";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function getSubjectByUser($idUser)
    {
        $sql = "SELECT * FROM subject_tb WHERE id_user = " . $this->db->escape($idUser) . " ";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function subjectByUserPagination($idUser,$limit,$start) {
        $sql = "SELECT * FROM subject_tb WHERE id_user = " . $this->db->escape($idUser) . " ORDER BY date_subject DESC LIMIT ".$start.",".$limit;
        $query = $this->db->query($sql);
        return $query->result();
    }

}
?>