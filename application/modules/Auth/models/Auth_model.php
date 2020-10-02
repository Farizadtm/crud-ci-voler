<?php


class Auth_model extends CI_Model {

    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', $post['password']);
        $query = $this->db->get();
        return $query;
    }

    public function get($id = null)
    {
        $this->db->from('user');
        if($id != null) {
            $this->db->where('name', $id);
        }
        $query = $this->db->get();

        return $query;
    }

    public function add($post)
    {
        $params['name'] = $post['name'];
        $params['username'] = $post['username'];
        $params['password'] = $post['password'];
        $params['role'] = $post['role'];
        $params['address'] = $post['address'];
        $params['telp'] = $post['telp'];
        $params['email'] = $post['email'];
        $this->db->insert('user', $params);
    }

    public function delete($id)
    {   
        $this->db->where('user_id', $id);
        $this->db->delete('user');
    }
}