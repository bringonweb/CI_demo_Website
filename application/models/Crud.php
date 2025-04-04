<?php

class Crud extends CI_Model
{
    public function insert($table,$data)
    {
        $result= $this->db->insert($table,$data);

        return $result;


    }


    public function fetchAlldata($table)
    {
        $data=$this->db->get($table);
        return $data->result();
    }
}