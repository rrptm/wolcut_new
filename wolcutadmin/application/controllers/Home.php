<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
    public function __construct()
	{	
		
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation','pagination','cart'));
		$this->load->database();
		$this->load->model('admin');
			if(!$this->session->userdata('a_id')){
                redirect('login', 'refresh');
         }

	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('dashboard');
		$this->load->view('footer');
	}

	public function personal_d()
	{
			$details=$this->admin->get_admin_login($this->session->userdata('a_id'));
			$data['a_id']=$details[0]->a_id;
			$data['a_mail']=$details[0]->a_mail;
			$data['a_contact']=$details[0]->a_contact;
			$this->load->view('header');
			$this->load->view('personal_d',$data);
			$this->load->view('footer');
	}
	public function update_personal_d()
	{        
	        $id=$this->session->userdata('a_id');
	        $data="";
			$logindata = array
			(
				'a_username' => $this->input->post('a_username'),
				'a_mail' => $this->input->post('a_mail'),
				'a_contact' => $this->input->post('a_contact')
			);
			
			if ($this->admin->update_admin_login($id,$logindata))
			{
				$this->session->set_flashdata('msg','<div class="">Thanks for sending us your details! Our team will be in touch with you soon.</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="">Oops! Error.  Please try again later!!!</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
	}

	public function members()
	{
		$data['query']=$this->admin->get_members();
		$this->load->view('header');
		$this->load->view('members', $data);
		$this->load->view('footer');		
	}

	public function add_member()
	{
			$data = array
			(
				'a_username' => $this->input->post('a_username'),
				'a_contact' => $this->input->post('a_contact'),
				'a_mail' => $this->input->post('a_mail'),
				'status' => $this->input->post('a_status'),
				'a_pass' => md5($this->input->post('a_pass')),
				'a_design' => $this->input->post('a_design'),
			);
			
			if ($this->admin->add_member($data))
			{
				$this->session->set_flashdata('msg','<div class="">Successfully Updated</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="">Oops! Error.  Please try again later!!!</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}

	}
	public function member_id($a_id)
	{   $details=$this->admin->memberbyid($a_id);
        	    	$data['a_id'] = $details[0]->a_id;
        			$data['a_username'] = $details[0]->a_username;
        			$data['a_contact'] = $details[0]->a_contact;
        			$data['a_design'] = $details[0]->a_design;
					$data['a_mail'] = $details[0]->a_mail;
					$data['a_pass'] = $details[0]->a_pass;
					$data['status'] = $details[0]->status;
					
     			$this->load->view('header');
				$this->load->view('adminbyid',$data);
				$this->load->view('footer');
	}
	public function update_member($a_id)
	{	$details=$this->admin->memberbyid($a_id);
          if($this->input->post('a_pass')==$details[0]->a_pass)
          {
              $a_pass=$details[0]->a_pass;
          }
          else
          {
              $a_pass=md5($this->input->post('a_pass'));
          }
			$data = array
			(
				'a_username' => $this->input->post('a_username'),
				'a_contact' => $this->input->post('a_contact'),
				'status' => $this->input->post('a_status'),
				'a_pass' => $a_pass,
				'a_design' => $this->input->post('a_design'),
				'a_mail' => $this->input->post('a_mail')
				
			);
			
			if ($this->admin->update_admin($a_id,$data))
			{
				$this->session->set_flashdata('msg','<div class="">Successfully Updated</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="">Oops! Error.  Please try again later!!!</div>');
				//redirect($_SERVER['HTTP_REFERER']);
			}
		
	}

	public function toggle_member($a_id,$a_status)
	{        
	        $status=1-$a_status;
			if ($this->admin->toggle_member($a_id,$status))
			{
				$this->session->set_flashdata('msg','<div class="">Thanks for sending us your details! Our team will be in touch with you soon.</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="">Oops! Error.  Please try again later!!!</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
	}
	
	public function category()
	{
		$data['query']=$this->admin->get_category();
		$this->load->view('header');
		$this->load->view('category', $data);
		$this->load->view('footer');		
	}

	public function add_category()
	{
			$data = array
			(
				'c_name' => $this->input->post('c_name'),
				'c_descr' => $this->input->post('c_descr'),
				'c_status' => $this->input->post('c_status')
			);
			
			if ($this->admin->add_category($data))
			{
				$this->session->set_flashdata('msg','<div class="">Thanks for sending us your details! Our team will be in touch with you soon.</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="">Oops! Error.  Please try again later!!!</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}

	}


	public function toggle_category($c_id,$c_status)
	{        
	        $c_status1=1-$c_status;
			if ($this->admin->toggle_category($c_id,$c_status1))
			{
				$this->session->set_flashdata('msg','<div class="">Thanks for sending us your details! Our team will be in touch with you soon.</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="">Oops! Error.  Please try again later!!!</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
	}
	
		public function update_category($c_id)
	{      // set form validation rules
		$this->form_validation->set_rules('c_id', 'categoryid', 'trim|required');
		$this->form_validation->set_rules('c_name', 'categoryname', 'trim|required');
		
		// submit
		if ($this->form_validation->run() == FALSE)
        {   $data['c_id']=$c_id;
            $details=$this->admin->get_category_id($c_id);
            $data['c_name']=$details[0]->c_name;
            $data['c_descr']=$details[0]->c_descr;
            $this->load->view('header');
		    $this->load->view('updatecategory', $data);
		    $this->load->view('footer');
        }  
	       else{ 
	           $data = array
			(
				'c_name' => $this->input->post('c_name'),
				'c_descr' => $this->input->post('c_descr')
			);
			
			if ($this->admin->update_category($this->input->post('c_id'),$data))
			{
				$this->session->set_flashdata('msg','<div class="">Successfully Updated</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="">Oops! Error.  Please try again later!!!</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
	       }
	}
	public function brand()
	{
		$data['query']=$this->admin->get_brand();
		$this->load->view('header');
		$this->load->view('brand', $data);
		$this->load->view('footer');		
	}

	public function add_brand()
	{
			$data = array
			(
				'b_name' => $this->input->post('b_name'),
				'b_descr' => $this->input->post('b_descr'),
				'b_status' => $this->input->post('b_status')
			);
			
			if ($this->admin->add_brand($data))
			{
				$this->session->set_flashdata('msg','<div class="">Thanks for sending us your details! Our team will be in touch with you soon.</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="">Oops! Error.  Please try again later!!!</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}

	}


	public function toggle_brand($b_id,$b_status)
	{        
	        $b_status1=1-$b_status;
			if ($this->admin->toggle_brand($b_id,$b_status1))
			{
				$this->session->set_flashdata('msg','<div class="">Thanks for sending us your details! Our team will be in touch with you soon.</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="">Oops! Error.  Please try again later!!!</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
	}
		public function update_brand($b_id)
	{      // set form validation rules
		$this->form_validation->set_rules('b_id', 'brandid', 'trim|required');
		$this->form_validation->set_rules('b_name', 'brandname', 'trim|required');
		
		// submit
		if ($this->form_validation->run() == FALSE)
        {   $data['b_id']=$b_id;
            $details=$this->admin->get_brand_id($b_id);
            $data['b_name']=$details[0]->b_name;
            $data['b_descr']=$details[0]->b_descr;
            $this->load->view('header');
		    $this->load->view('updatebrand', $data);
		    $this->load->view('footer');
        }  
	       else{ 
	           $data = array
			(
				'b_name' => $this->input->post('b_name'),
				'b_descr' => $this->input->post('b_descr')
			);
			
			if ($this->admin->update_brand($this->input->post('b_id'),$data))
			{
				$this->session->set_flashdata('msg','<div class="">Successfully Updated</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="">Oops! Error.  Please try again later!!!</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
	       }
	}
	public function update_pass()
	{      
		$this->form_validation->set_rules('a_pass', 'Password', 'trim|required|md5');
		if ($this->form_validation->run() == TRUE)
        {  
	        $id=$this->session->userdata('a_id');
	        $logindata["a_pass"] = $this->input->post('a_pass');
			
			if ($this->admin->update_admin_login($id,$logindata))
			{
				$this->session->set_flashdata('msg','<div class="">Thanks for sending us your details! Our team will be in touch with you soon.</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="">Oops! Error.  Please try again later!!!</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}

		}
	}

	public function setting_pass()
	{
		$this->load->view('header');
		$this->load->view('update_pass');
		$this->load->view('footer');		
	}
}
