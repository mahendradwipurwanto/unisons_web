<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		// LOAD MODEL
		$this->load->model(['M_beranda', 'M_admin']);
	}

	public function index()
	{

		$params['query'] = [
			'asset_owner' => '0x773a392c30aa5011c68d5bb5a89dc48ab7fd30f0',
		];

		$data['collection'] = array_slice($this->opensea->get_collection($params), 0, 5, true);

		$data['hero'] = $this->M_beranda->get_hero();

		$data['featured_hero'] = $this->M_beranda->get_featuredHero();
		$data['featured_list'] = $this->M_beranda->get_featuredList();
		$this->template_frontend->view('beranda/home', $data);
	}

	public function not_found()
	{
		$this->template_frontend->view('beranda/not_found');
	}

	public function about()
	{

		$data['featured_about'] = $this->M_beranda->get_featuredAbout();
		$this->template_frontend->view('beranda/about', $data);
	}

	public function gallery()
	{
		$data['categories'] = $this->M_admin->get_categoriesGallery();
		$data['gallery'] = $this->M_admin->get_listGallery();

		$this->template_frontend->view('beranda/gallery/gallery', $data);
	}

	public function gallery_detail($permalink)
	{
		$gallery = $this->M_admin->get_detailGallery($permalink);
		$data['gallery'] = $gallery;
		$data['pictures'] = $this->M_admin->get_galleryPictures($gallery->id);
		$data['categories'] = $this->M_admin->get_categoriesGallery();
		$data['gallery_rand'] = $this->M_admin->get_listGalleryRand();
		$this->template_frontend->view('beranda/gallery/gallery_detail', $data);
	}

	public function new_collection()
	{

		$params['query'] = [
			'asset_owner' => '0x773a392c30aa5011c68d5bb5a89dc48ab7fd30f0',
		];

		$data['collection'] = $this->opensea->get_collection($params);

		$this->template_frontend->view('beranda/new_collection', $data);
	}

	public function union_care()
	{
		$data['w_unionCare'] = $this->M_admin->get_websiteInfo("union_care");

		$this->template_frontend->view('beranda/union_care', $data);
	}

	public function item_detail($slug)
	{
		$data['data'] = $this->opensea->get_collection_detail($slug);
		$this->load->view('beranda/ajax/item_detail', $data);
	}

	public function search()
	{
		$this->template_frontend->view('search');
	}
}
