<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_Model extends CI_Model {

	function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function userLogin($usernameLogin,$passwordLogin) {
        $sql = "SELECT * FROM user_tb WHERE username = " . $this->db->escape($usernameLogin) . " AND password = " . $this->db->escape($passwordLogin) . "";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function userByUsername($usernameSignup)
    {
    	$sql = "SELECT * FROM user_tb WHERE username = " . $this->db->escape($usernameSignup) . "";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function insertUser($firstnameSignup, $lastnameSignup, $usernameSignup, $passwordSignup) {
        $sql = "INSERT INTO user_tb(firstname,lastname,username,password) "
                . "VALUES("
                . "" . $this->db->escape($firstnameSignup) . ", "
                . "" . $this->db->escape($lastnameSignup) . ", "
                . "" . $this->db->escape($usernameSignup) . ", "
                . "" . $this->db->escape($passwordSignup) . ")";
        $this->db->query($sql);
        return $this->db->affected_rows();
    }

}
?>