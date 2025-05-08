<?php
class User_model extends CI_Model {

    function __construct()
    {       
        parent::__construct();
    }

    function add($option)
    {
        $this->db->set('full_name', $option['full_name']);
        $this->db->set('email', $option['email']);
        $this->db->set('password', $option['passwd']);
        $this->db->set('created', 'NOW()', false);
        $this->db->insert('members');
        $result = $this->db->insert_id();
        return $result;
    }

    function get($user_id){
        $this->db->select('*');
        return $this->db->get_where('members', array('email'=>$user_id))->row();
    }

    function getByEmail($option)
    {
        $this->db->select('*');
        return $result = $this->db->get_where('members', array('email'=>$option['email']))->row();
    }
/*
    function get($user_id){
        $this->db->select('*');
        return $this->db->get_where('members', array('op_id'=>$user_id))->row();
    }
*/
    function getByOp_ID($option)
    {
        $this->db->select('*');
        return $result = $this->db->get_where('members', array('op_id'=>$option['op_id']))->row();
    }

    function authorizeByEmail($option)
    {
        $this->db->select('*');
        return $result = $this->db->get_where('members', array('email'=>$option['email']))->row();
    }    

}