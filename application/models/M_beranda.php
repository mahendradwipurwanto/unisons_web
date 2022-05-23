<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_beranda extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    // get website info by param
    public function get_hero()
    {
        $this->db->select('b.*');
        $this->db->from('tb_information_type a');
        $this->db->join('tb_information b', 'a.id = b.id_type');
        $this->db->where('a.key', 'hero');
        $query = $this->db->get();
        return $query->result();
    }

    // get website info by param
    public function get_featuredHero()
    {
        $this->db->select('b.*');
        $this->db->from('tb_information_type a');
        $this->db->join('tb_information b', 'a.id = b.id_type');
        $this->db->where('a.key', 'featured_hero');
        $query = $this->db->get();
        return $query->row();
    }

    // get website info by param
    public function get_featuredList()
    {
        $this->db->select('b.*');
        $this->db->from('tb_information_type a');
        $this->db->join('tb_information b', 'a.id = b.id_type');
        $this->db->where('a.key', 'featured_list');
        $query = $this->db->get();
        return $query->result();
    }

    // get website info by param
    public function get_featuredAbout()
    {
        $this->db->select('b.*');
        $this->db->from('tb_information_type a');
        $this->db->join('tb_information b', 'a.id = b.id_type');
        $this->db->where('a.key', 'featured_about');
        $query = $this->db->get();
        return $query->result();
    }
}
