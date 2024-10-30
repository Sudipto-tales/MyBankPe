<?php

class BlogModel extends CI_Model
{
    public function blogs_get()
    {
        $this->db->select('*');
        $this->db->from('blog_tbl');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            
        }
    }

    public function get_last_blog()
    {
        
        $this->db->select('*');
        $this->db->from('blog_tbl');
        $this->db->where('blog_id = (SELECT MAX(blog_id) FROM blog_tbl)');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return null;
        }
    }

    public function search_blogs($query)
{
    $this->db->like('blog_name', $query);
    $this->db->or_like('blog_dsc', $query);
    $query = $this->db->get('blog_tbl');
    return $query->result();
}

public function insert_blog($data){
    $this->db->insert('blog_tbl',$data);
}

}

?>