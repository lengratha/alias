<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_cate extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->model('cate_md');
		$data['main_page']='category';
		$data['title']='Alias | Product';
		//$data['db_dt']=$this->cate_md->get_post();

		$this->load->view('templates/template',$data);
	}

	public function detail($id=0)
	{
		$this->load->model('pr_md');
		$data['main_page']='details';
		$data['title']='Alias | Women\'s shoes-details';
		$data['pr']=$this->pr_md->getTums($id);
		$this->load->view('templates/detail_no_slider',$data);
	}

	public function category($cateId,$subCateID)
	{

	}
	

	//public function getImg()
	//{

	//	echo "<img id='zoom_01' src='".base_url('assets/images/small/'.$_POST['img'])."' data-zoom-image='".base_url('assets/images/large/'.$_POST['img'])."'/>";
	//}
}


