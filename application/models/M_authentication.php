<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_authentication extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    // get user data's
    public function get_user($email)
    {
        $this->db->select('*');
        $this->db->from('tb_auth');
        $this->db->where('email', $email);
        $query = $this->db->get();
        return $query->row();
    }

    // get user data's by user_id
    public function get_userByID($user_id)
    {
        $this->db->select('*');
        $this->db->from('tb_auth');
        $this->db->where('user_id', $user_id);;
        $query = $this->db->get();
        return $query->row();
    }

    // get user data's by reset code
    public function get_userByResetCode($reset_code)
    {
        $this->db->select('*');
        $this->db->from('tb_auth');
        $this->db->where('reset_code', $reset_code);;
        $query = $this->db->get();
        return $query->row();
    }

    // update data's user
    function update_user($data_user, $where)
    {
        $this->db->where($where);
        $this->db->update('tb_auth', $data_user);
        return $this->db->affected_rows() == true;
    }

    // creater recovery password request
    function create_reset_request($user_id)
    {
        $this->db->where('user_id', $user_id);
        $this->db->update('tb_auth', ['reset_code' => $this->create_reset_code()]);
        return $this->db->affected_rows() == true;
    }

    // check reset code
    public function check_reset_code($reset_code)
    {
        $this->db->select('*');
        $this->db->from('tb_auth');
        $this->db->where('reset_code', $reset_code);
        $query = $this->db->get();
        return $query->num_rows();
    }

    // create reset code
    public function create_reset_code()
    {

        // call encrypt library
        $this->encryption->initialize(array('driver' => 'openssl'));

        // generate reset code
        do {
            $reset_code    = random_int(100000, 999999);

            // encrypt reset code
            $ciphercode     = $this->encryption->encrypt($reset_code);
        } while ($this->check_reset_code($reset_code) > 0);

        return $ciphercode;
    }
}
