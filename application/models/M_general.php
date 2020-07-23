<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_general extends CI_Model
{
    public function save($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function update($table, $data, $where)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function getAll($table)
    {
        return $this->db->get($table);
    }

    public function getWhere($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
}
