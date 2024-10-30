<?php

class EmailModel extends CI_Model
{
    public function insert_email($data)
    {
        return $this->db->insert('emails',$data);
    }
}