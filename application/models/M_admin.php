<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    // get website info by param
    public function get_websiteInfo($name)
    {
        $this->db->select('b.value');
        $this->db->from('tb_information_type a');
        $this->db->join('tb_information b', 'a.id = b.id_type');
        $this->db->where('a.key', 'website');
        $this->db->where('b.name', $name);
        $query = $this->db->get();
        return $query->row()->value;
    }

    // get mailer info by param
    public function get_mailerInfo($name)
    {
        $this->db->select('b.value');
        $this->db->from('tb_information_type a');
        $this->db->join('tb_information b', 'a.id = b.id_type');
        $this->db->where('a.key', 'mailer');
        $this->db->where('b.name', $name);
        $query = $this->db->get();
        return $query->row()->value;
    }

    // get hero info 
    public function get_websiteHero()
    {
        $this->db->select('*');
        $this->db->from('tb_information_type a');
        $this->db->join('tb_information b', 'a.id = b.id_type');
        $this->db->where('a.key', 'hero');
        $query = $this->db->get();
        return $query->row();
    }

    // get featured info 
    public function get_websiteFeatured()
    {
        $this->db->select('*');
        $this->db->from('tb_information_type a');
        $this->db->join('tb_information b', 'a.id = b.id_type');
        $this->db->where('a.key', 'featured_hero');
        $query = $this->db->get();
        return $query->row();
    }

    // get gallery categories
    public function get_categoriesGallery()
    {
        $this->db->select('*');
        $this->db->from('tb_categories');
        $this->db->where('type', 1);
        $this->db->where('is_deleted', 0);
        $query = $this->db->get();
        return $query->result();
    }

    // get list gallery
    public function get_listGallery()
    {
        $this->db->select('a.*, b.categories, c.picture');
        $this->db->from('tb_gallery a');
        $this->db->join('tb_categories b', 'a.id_categories = b.id');
        $this->db->join('tb_gallery_pictures c', 'a.id = c.id_gallery', 'left');
        $this->db->where('b.type', 1);
        $this->db->where('a.is_deleted', 0);
        $this->db->group_by('a.id');
        $query = $this->db->get();
        return $query->result();
    }

    // get random list gallery
    public function get_listGalleryRand()
    {
        $this->db->select('a.*, b.categories, c.picture');
        $this->db->from('tb_gallery a');
        $this->db->join('tb_categories b', 'a.id_categories = b.id');
        $this->db->join('tb_gallery_pictures c', 'a.id = c.id_gallery', 'left');
        $this->db->where('b.type', 1);
        $this->db->where('a.is_deleted', 0);
        $this->db->group_by('a.id');
        $this->db->order_by('RAND()');
        $query = $this->db->get();
        return $query->result();
    }

    // get detail gallery
    public function get_detailGallery($permalink)
    {
        $this->db->select('a.*, b.categories');
        $this->db->from('tb_gallery a');
        $this->db->join('tb_categories b', 'a.id_categories = b.id');
        $this->db->where('a.permalink', $permalink);
        $this->db->where('b.type', 1);
        $this->db->where('a.is_deleted', 0);
        $query = $this->db->get();
        return $query->row();
    }

    // get how much gallery on each categories
    public function count_galleryOnCategories($id_categories)
    {
        $query = $this->db->query("SELECT * FROM tb_gallery WHERE id_categories = '$id_categories' AND is_deleted = 0");
        return $query->num_rows();
    }

    // get gallery pictures
    public function get_galleryPictures($id)
    {
        $this->db->select('*');
        $this->db->from('tb_gallery_pictures');
        $this->db->where('id_gallery', $id);
        $this->db->order_by('RAND()');
        $query = $this->db->get();
        return $query->result();
    }

    // cek permalink kursus
    public function gallery_permalink($permalink)
    {
        $query = $this->db->query("SELECT * FROM tb_gallery WHERE permalink = '$permalink'");
        return $query->num_rows();
    }

    // make self id for gallery
    public function make_idGallery(){
        return $this->db->get('tb_gallery')->num_rows()+1;
    }

    // get categories
    public function get_categories()
    {
        $this->db->select('*');
        $this->db->from('tb_categories');
        $this->db->where('is_deleted', 0);
        $query = $this->db->get();
        return $query->result();
    }

    // procces
    public function change_passAdmin()
    {
        $pass         = htmlspecialchars($this->input->post('new_pass'), true);
        $pass         = password_hash($pass, PASSWORD_DEFAULT);

        $this->db->where('user_id', $this->session->userdata("user_id"));
        $this->db->update('tb_auth', array('password' => $pass));

        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function change_websiteInfo()
    {
        $title             = $this->input->POST('title');
        $description         = $this->input->POST('description');
        $address     = $this->input->POST('address');
        $phone         = $this->input->POST('phone');
        $email         = $this->input->POST('email');


        $this->db->where('name', "title");
        $this->db->update('tb_information', array('value' => $title));

        $this->db->where('name', "description");
        $this->db->update('tb_information', array('value' => $description));

        $this->db->where('name', "address");
        $this->db->update('tb_information', array('value' => $address));

        $this->db->where('name', "phone");
        $this->db->update('tb_information', array('value' => $phone));

        $this->db->where('name', "email");
        $this->db->update('tb_information', array('value' => $email));

        return true;
    }

    public function change_websiteContent()
    {
        $about             = $this->input->POST('about');


        $this->db->where('name', "about");
        $this->db->update('tb_information', array('value' => $about));

        return true;
    }

    public function change_mailer()
    {
        $username         = $this->input->post('username');
        $password         = $this->input->post('password');
        $set_form         = $this->input->post('set_form');

        $this->db->where('name', "username");
        $this->db->update('tb_information', array('value' => $username));

        $this->db->where('name', "password");
        $this->db->update('tb_information', array('value' => $password));

        $this->db->where('name', "set_form");
        $this->db->update('tb_information', array('value' => $set_form));


        return true;
    }

    public function change_hero($background)
    {
        $title         = $this->input->post('hero_title');
        $description   = $this->input->post('hero_description');

        if ($background == false) {
            $data = [
                'name' => $title,
                'value' => $description
            ];
        } else {
            $data = [
                'image' => $background,
                'name' => $title,
                'value' => $description
            ];
        }

        $this->db->where('id', 16);
        $this->db->update('tb_information', $data);

        return true;
    }

    public function change_featured()
    {
        $title         = $this->input->post('featured_title');
        $description   = $this->input->post('featured_description');

        $data = [
            'name' => $title,
            'value' => $description
        ];

        $this->db->where('id', 21);
        $this->db->update('tb_information', $data);

        return true;
    }

    public function change_unionCare()
    {

        $cek = $this->db->get_where('tb_information', ['name' => 'union_care'])->num_rows();

        $union_care   = $this->input->post('union_care');

        if ($cek > 0) {

            $data = [
                'value' => $union_care
            ];

            $this->db->where('name', 'union_care');
            $this->db->update('tb_information', $data);
        } else {

            $data = [
                'id_type' => 16,
                'name' => 'union_care',
                'value' => $union_care
            ];

            $this->db->insert('tb_information', $data);
        }

        return true;
    }

    public function procces_addNewGallery()
    {

        $id         = $this->input->post('id');
        $title   = $this->input->post('title');
        $id_categories   = $this->input->post('id_categories');
        $description   = $this->input->post('description');
        $tags   = $this->input->post('tags');
        
        $permalink = null;

        $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";

        $word = preg_replace("/[^a-zA-Z0-9]+/", "-", $title);
        $word = strtolower($word);

        // generate permalink kursus
        do {
            $uniqid = "";

            for ($i = 1; $i <= 4; $i++) {
                $uniqid .= $chars[mt_rand(0, strlen($chars) - 1)];
                $permalink = strtolower($word . '-' . $uniqid);
            }
        } while ($this->gallery_permalink($permalink) > 0);

        $data = [
            'id' => $id,
            'permalink' => $permalink,
            'title' => $title,
            'id_categories' => $id_categories,
            'description' => $description,
            'tags' => $tags,
            'created_at' => time()
        ];

        $this->db->insert('tb_gallery', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function procces_editNewGallery()
    {

        $id         = $this->input->post('id');
        $title   = $this->input->post('title');
        $id_categories   = $this->input->post('id_categories');
        $description   = $this->input->post('description');
        $tags   = $this->input->post('tags');

        $data = [
            'title' => $title,
            'id_categories' => $id_categories,
            'description' => $description,
            'tags' => $tags,
            'modified_at' => time(),
        ];

        $this->db->where('id', $id);
        $this->db->update('tb_gallery', $data);
        return true;
    }

    public function procces_deleteNewGallery($id)
    {
        $this->db->where('id', $id);
        // $this->db->delete('tb_gallery');
        $this->db->update('tb_gallery', ['is_deleted' => 1]);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function add_newCategories()
    {

        $categories   = $this->input->post('categories');
        $description   = $this->input->post('description');

        $data = [
            'categories' => $categories,
            'type' => 1,
            'description' => $description
        ];

        $this->db->insert('tb_categories', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function edit_categories()
    {

        $id   = $this->input->post('id');
        $categories   = $this->input->post('categories');
        $type   = $this->input->post('type');
        $description   = $this->input->post('description');

        $data = [
            'categories' => $categories,
            'description' => $description
        ];

        $this->db->where('id', $id);
        $this->db->update('tb_categories', $data);
        return true;
    }

    public function delete_categories($id)
    {
        $this->db->where('id', $id);
        // $this->db->delete('tb_gallery');
        $this->db->update('tb_categories', ['is_deleted' => 1]);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
}
