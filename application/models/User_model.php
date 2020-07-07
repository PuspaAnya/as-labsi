<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function all_user()
    {
        $query = "SELECT * `user`";
        return $this->db->query($query)->result_array();
    }
}
