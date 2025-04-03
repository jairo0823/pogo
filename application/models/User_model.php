<?php

class User_model extends CI_Model {

    public function get_user_by_email($email) {
        return $this->db->get_where('users', array('email' => $email))->row_array();
    }

    public function register_user($data) {
        return $this->db->insert('users', $data);
    }
}
?>