<?php

class Note extends CI_Model {

    function insert($post)
    {
       $this->db->query("INSERT INTO notes (title, description, created_at) VALUES (?, ?, NOW())", array($post['title'], $post['desc']));
    }
    function update($post)
    {
       $this->db->query("UPDATE notes SET description = ? WHERE id = ?", array($post['desc'], $post['id']));
    }
    function delete($post)
    {
       $this->db->query("DELETE FROM notes WHERE id = ?", array($post['id']));
    }

    function get_all()
    {
        return $this->db->query("SELECT * FROM notes ORDER BY id DESC")->result_array();
    }

}

//end of file