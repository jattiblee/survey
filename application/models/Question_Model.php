<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Question_Model extends CI_Model {

	function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insertQuestion($subject_sess, $question_sess, $question){
    	$now = date('Y-m-d H:i:s');
    	$sql = "INSERT INTO question_tb(subject_sess, question_sess, question, date_question) "
                . "VALUES("
                . "" . $this->db->escape($subject_sess) . ", "
                . "" . $this->db->escape($question_sess) . ", "
                . "" . $this->db->escape($question) . ", "
                . "" . $this->db->escape($now) . ")";
        $this->db->query($sql);
        return $this->db->affected_rows();
    }

    public function getQuestionBySubjSession($subject_sess){
    	$sql = "SELECT * FROM question_tb WHERE subject_sess = " . $this->db->escape($subject_sess) . " ";
        $query = $this->db->query($sql);
        return $query->result();
    }

//     SELECT * FROM subject_tb s 
// LEFT JOIN question_tb q  ON q.`subject_sess` = s.`subject_sess`
// LEFT JOIN option_tb o ON o.`question_sess` = q.`question_sess`
// WHERE s.`subject_sess` = 
}
?>