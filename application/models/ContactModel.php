<?php

class ContactModel extends CI_Model
{
    public function insert_contact($data)
    {
        return $this->db->insert('contactus_tbl',$data);
    }
    public function get_contact()
    {
        $this->db->select("*");
        $this->db->from("contactus_tbl");
        $query = $this->db->get();
        return $query->result_array();
    
    }

    public function delete_contact($id)
{
    $this->db->where('p_id', $id);
    return $this->db->delete('contactus_tbl');
}

}