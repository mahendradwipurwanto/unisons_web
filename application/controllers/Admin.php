<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // CEK APAKAH USER MASIH LOGIN
        if ($this->session->userdata('logged_in') == FALSE || !$this->session->userdata('logged_in')) {
            if (!empty($_SERVER['QUERY_STRING'])) {
                $uri = uri_string() . '?' . $_SERVER['QUERY_STRING'];
            } else {
                $uri = uri_string();
            }
            $this->session->set_userdata('redirect', $uri);
            $this->session->set_flashdata('error', "Harap masuk ke akun anda, untuk melanjutkan");
            redirect('login');
        } else {
            // SET ID_USER, SAAT USER MASIH LOGIN
            $this->user_id        = $this->session->userdata('user_id');
            $this->user_name      = $this->session->userdata('name');
            $this->user_email     = $this->session->userdata('email');
        }

        $this->load->model('M_authentication', 'M_auth');
        $this->load->model('M_admin');
    }
    public function index()
    {

        $this->template_backend->view('admin/dashboard');
    }

    public function information()
    {

        $data['w_title'] = $this->M_admin->get_websiteInfo("title");
        $data['w_description'] = $this->M_admin->get_websiteInfo("description");
        $data['w_about'] = $this->M_admin->get_websiteInfo("about");
        $data['w_address'] = $this->M_admin->get_websiteInfo("address");
        $data['w_phone'] = $this->M_admin->get_websiteInfo("phone");
        $data['w_email'] = $this->M_admin->get_websiteInfo("email");

        $data['w_about'] = $this->M_admin->get_websiteInfo("about");

        $data['w_unionCare'] = $this->M_admin->get_websiteInfo("union_care");

        $data['w_logo'] = $this->M_admin->get_websiteInfo("logo");
        $data['w_logo2'] = $this->M_admin->get_websiteInfo("logo2");

        //mailer
        $data['w_username'] = $this->M_admin->get_mailerInfo("username");
        $data['w_password'] = $this->M_admin->get_mailerInfo("password");
        $data['w_allias'] = $this->M_admin->get_mailerInfo("set_form");

        $data['hero'] = $this->M_admin->get_websiteHero();
        $data['featured'] = $this->M_admin->get_websiteFeatured();

        $data['categories'] = $this->M_admin->get_categories();

        $this->template_backend->view('admin/information', $data);
    }
    public function list_gallery()
    {
        $data['categories'] = $this->M_admin->get_categoriesGallery();
        $data['gallery'] = $this->M_admin->get_listGallery();

        $this->template_backend->view('admin/gallery/list_gallery', $data);
    }
    public function add_gallery()
    {
        $data['id'] = $this->M_admin->make_idGallery();
        $data['categories'] = $this->M_admin->get_categoriesGallery();

        $this->template_backend->view('admin/gallery/add_gallery', $data);
    }
    public function edit_gallery($permalink)
    {
        $gallery = $this->M_admin->get_detailGallery($permalink);
        $data['gallery'] = $gallery;
        $data['pictures'] = $this->M_admin->get_galleryPictures($gallery->id);
        $data['categories'] = $this->M_admin->get_categoriesGallery();

        $this->template_backend->view('admin/gallery/edit_gallery', $data);
    }
    public function manage_collection()
    {

        $params['query'] = [
            'asset_owner' => '0x773a392c30aa5011c68d5bb5a89dc48ab7fd30f0',
        ];

        $data['collection'] = $this->opensea->get_collection($params);

        $this->template_backend->view('admin/manage_collection', $data);
    }
    public function list_foundation()
    {

        $this->template_backend->view('admin/foundation/list_foundation');
    }
    public function new_foundation()
    {

        $this->template_backend->view('admin/foundation/new_foundation');
    }

    public function change_websiteInfo()
    {
        if ($this->M_admin->change_websiteInfo() == true) {
            $this->session->set_flashdata('success', 'Successfully change your website information !');
            redirect(site_url('dashboard/information'));
        } else {
            $this->session->set_flashdata('error', 'There is a problem when change your website information !');
            redirect($this->agent->referrer());
        }
    }

    public function change_websiteContent()
    {
        if ($this->M_admin->change_websiteContent() == true) {
            $this->session->set_flashdata('success', 'Successfully change your website content !');
            redirect(site_url('dashboard/information'));
        } else {
            $this->session->set_flashdata('error', 'There is a problem when change your website content !');
            redirect($this->agent->referrer());
        }
    }

    public function change_featured()
    {
        if ($this->M_admin->change_featured() == true) {
            $this->session->set_flashdata('success', 'Successfully change your featured content !');
            redirect(site_url('dashboard/information'));
        } else {
            $this->session->set_flashdata('error', 'There is a problem when change your featured content !');
            redirect($this->agent->referrer());
        }
    }

    public function change_unionCare()
    {
        if ($this->M_admin->change_unionCare() == true) {
            $this->session->set_flashdata('success', 'Successfully change union care page content !');
            redirect(site_url('dashboard/information#tabs-3'));
        } else {
            $this->session->set_flashdata('error', 'There is a problem when change union care page content !');
            redirect($this->agent->referrer());
        }
    }

    function change_icon()
    {
        // UPLOAD
        if (!empty($_FILES['image']['name'])) {
            // CREATE FILENAME
            $path          = $_FILES['image']['name'];
            $ext           = pathinfo($path, PATHINFO_EXTENSION);

            $filename    = "logo.{$ext}";

            // UPLOAD FILE
            $config['upload_path']          = "berkas/";
            $config['allowed_types']        = 'JPEG|jpeg|JPG|jpg|PNG|png';
            $config['max_size']             = 10 * 1024;
            $config['file_name']            = $filename;
            $config['overwrite']            = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('error', "There is a problem when trying upload your icon!");
                redirect($this->agent->referrer());
            } else {

                $this->db->where('name', 'logo');
                $this->db->update('tb_information', array('value' => $filename));
                $this->session->set_flashdata('success', 'Successfully change your icon !');
                redirect(site_url('dashboard/information'));
            }
        } else {
            $this->session->set_flashdata('error', 'Please choose an image !');
            redirect($this->agent->referrer());
        }
    }

    function change_logo()
    {
        // UPLOAD
        if (!empty($_FILES['image']['name'])) {
            // CREATE FILENAME
            $path          = $_FILES['image']['name'];
            $ext           = pathinfo($path, PATHINFO_EXTENSION);

            $filename    = "logo.{$ext}";

            // UPLOAD FILE
            $config['upload_path']          = "berkas/";
            $config['allowed_types']        = 'JPEG|jpeg|JPG|jpg|PNG|png';
            $config['max_size']             = 10 * 1024;
            $config['file_name']            = $filename;
            $config['overwrite']            = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('error', "There is a problem when trying upload your icon !");
                redirect($this->agent->referrer());
            } else {

                $this->db->where('name', 'logo2');
                $this->db->update('tb_information', array('value' => $filename));
                $this->session->set_flashdata('success', 'Successfully change your icon !');
                redirect(site_url('dashboard/information'));
            }
        } else {
            $this->session->set_flashdata('error', 'Please choose an image !');
            redirect($this->agent->referrer());
        }
    }

    function change_hero()
    {
        // UPLOAD
        if (!empty($_FILES['image']['name'])) {
            // CREATE FILENAME
            $path          = $_FILES['image']['name'];
            $ext           = pathinfo($path, PATHINFO_EXTENSION);

            $filename    = "hero.{$ext}";

            // UPLOAD FILE
            $config['upload_path']          = "berkas/hero";
            $config['allowed_types']        = 'JPEG|jpeg|JPG|jpg|PNG|png';
            $config['max_size']             = 10 * 1024;
            $config['file_name']            = $filename;
            $config['overwrite']            = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('error', "There is a problem when trying upload your hero data`s !");
                redirect($this->agent->referrer());
            } else {

                $this->M_admin->change_hero($filename);
                $this->session->set_flashdata('success', 'Successfully change your hero data`s !');
                redirect(site_url('dashboard/information'));
            }
        } else {

            $this->M_admin->change_hero(false);
            $this->session->set_flashdata('success', 'Successfully change your hero data`s !');
            redirect(site_url('dashboard/information'));
        }
    }

    function gallery_uploadPicture($id)
    {

        // ATUR FOLDER UPLOAD DESAIN
        $folder             = "berkas/gallery/{$id}/";

        if (!is_dir($folder)) {
            mkdir($folder, 0755, true);
        }

        $config['upload_path']          = $folder;
        $config['allowed_types']        = '*';
        $config['max_size']             = 20 * 1024;
        $config['overwrite']            = true;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('userfile')) {
            $upload_data     = $this->upload->data();
            $this->db->insert('tb_gallery_pictures', ['id_gallery' => $id, 'picture' => $upload_data['file_name']]);
        }
    }

    function gallery_deletePicture($id)
    {
        $filename = $this->input->post('filename');
        $filename = str_replace(" ", "_", $filename);
        $this->db->where(['id_gallery' => $id, 'picture' => $filename]);
        $this->db->delete('tb_gallery_pictures');
        // echo $filename;
        unlink("./berkas/gallery/{$id}/".$filename);
    }

    // gallery add process
    function procces_addNewGallery()
    {
        if ($this->M_admin->procces_addNewGallery() == true) {
            $this->session->set_flashdata('success', 'Successfully add new gallery !');
            redirect(site_url('dashboard/list-gallery'));
        } else {
            $this->session->set_flashdata('error', 'There is a problem when adding new gallery !');
            redirect($this->agent->referrer());
        }
    }

    // gallery edit process
    function procces_editNewGallery()
    {
        if ($this->M_admin->procces_editNewGallery() == true) {
            $this->session->set_flashdata('success', 'Successfully edit gallery !');
            redirect(site_url('dashboard/list-gallery'));
        } else {
            $this->session->set_flashdata('error', 'There is a problem when trying to edit gallery !');
            redirect($this->agent->referrer());
        }
    }

    // gallery delete process
    function procces_deleteNewGallery($id)
    {
        if ($this->M_admin->procces_deleteNewGallery($id) == true) {
            $this->session->set_flashdata('success', 'Successfully delete gallery !');
            redirect(site_url('dashboard/list-gallery'));
        } else {
            $this->session->set_flashdata('error', 'There is a problem when delete gallery !');
            redirect($this->agent->referrer());
        }
    }

    // categories add process
    function add_newCategories()
    {
        if ($this->M_admin->add_newCategories() == true) {
            $this->session->set_flashdata('success', 'Successfully add new categories !');
            redirect(site_url('dashboard/information#tabs-2'));
        } else {
            $this->session->set_flashdata('error', 'There is a problem when adding new categories !');
            redirect($this->agent->referrer());
        }
    }

    // categories edit process
    function edit_categories()
    {
        if ($this->M_admin->edit_categories() == true) {
            $this->session->set_flashdata('success', 'Successfully edit categories !');
            redirect(site_url('dashboard/information#tabs-2'));
        } else {
            $this->session->set_flashdata('error', 'There is a problem when trying to edit categories !');
            redirect($this->agent->referrer());
        }
    }

    // categories delete process
    function delete_categories($id)
    {
        if ($this->M_admin->delete_categories($id) == true) {
            $this->session->set_flashdata('success', 'Successfully delete categories !');
            redirect(site_url('dashboard/information#tabs-2'));
        } else {
            $this->session->set_flashdata('error', 'There is a problem when delete categories !');
            redirect($this->agent->referrer());
        }
    }
}
