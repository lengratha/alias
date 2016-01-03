<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pr_md extends CI_Model {

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
	public function get_post()
	{
		//$this->db->where('id',$id);
		$data=$this->db->get('tbl_post');
		return $data->result_array();
	}
	

	function insert($data)
	{
		//$this->db->query('');
		$data=array('post'=>1);
		$this->db->insert('tbl_post',$data);

	}

	function getTums($id)
	{
		$this->db->where('PR_POST_ID',$id);
		$data=$this->db->get('ali_pr_post');
		return $data->row_array();

	}
}
