<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct()
	{	
		
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation','pagination','cart'));
		$this->load->database();
		$this->load->model('usermodal');
			if(!$this->session->userdata('a_id')){
                redirect('login', 'refresh');
         }

	}
	public function index()
	{   
		$data['query']=$this->usermodal->get_user();
	    $this->load->view('header');
		$this->load->view('viewuser',$data);
		$this->load->view('footer');
	}
	public function insertuser()
	{
		$this->load->view('header');
		$this->load->view('user');
		$this->load->view('footer');
	}
	public function add_user()
	{   
		$this->form_validation->set_rules('u_mail', 'Email ID', 'trim|valid_email');
		$this->form_validation->set_rules('u_contact', 'contact', 'trim|required|is_unique[user.u_contact]');
		// submit
		if ($this->form_validation->run() == FALSE)
        {	
        	$this->session->set_flashdata('msg','<div class="">Oops! Error.  Please try again later!!!</div>');
				redirect($_SERVER['HTTP_REFERER']);
        }
		else
		{
			$data = array
			(
				'u_name' => $this->input->post('u_name'),
				'u_add' => $this->input->post('u_add'),
				'u_contact' => $this->input->post('u_contact'),
				'u_mail' => $this->input->post('u_mail'),
				'u_status' => $this->input->post('u_status')
			);
			 $details['u_name']=$this->input->post('u_name');
			 $details['u_contact']=$this->input->post('u_contact');
			if ($this->usermodal->add_user($data))
			{   
				$this->session->set_flashdata('msg','<div class="">Successfully Updated.</div>');
				
			    /*$this->load->view('sms/newuser',$details);*/
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
		public function user_id($u_id)
	{   
		$data['query1']=$this->usermodal->get_warehouse();
	    $details=$this->usermodal->userbyid($u_id);
        	    	$data['u_id'] = $details[0]->u_id;
        			$data['u_name'] = $details[0]->u_name;
        			$data['u_contact'] = $details[0]->u_contact;
        			$data['u_add'] = $details[0]->u_add;
					$data['u_mail'] = $details[0]->u_mail;
					
     			$this->load->view('header');
				$this->load->view('userbyid',$data);
				$this->load->view('footer');
	}
	public function update_user($u_id)
	{	
		$this->form_validation->set_rules('u_card', 'card', 'trim|required|is_unique[user.u_card]');
		// submit
		if ($this->form_validation->run() == FALSE)
        {	
        	$this->session->set_flashdata('msg','<div class="">Oops! Error.  Please try again later!!!</div>');
				redirect($_SERVER['HTTP_REFERER']);
        }
		else
		{
		

			$data = array
			(
				'u_name' => $this->input->post('u_name'),
				'u_contact' => $this->input->post('u_contact'),
				'u_add' => $this->input->post('u_add'),
				'u_mail' => $this->input->post('u_mail')
				
			);
			
			if ($this->usermodal->update_user($u_id,$data))
			{
				$this->session->set_flashdata('msg','<div class="">Successfully Updated.</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="">Oops! Error.  Please try again later!!!</div>');
				//redirect($_SERVER['HTTP_REFERER']);
			}
		}
		
	}
	


	public function toggle_user($w_id,$w_status)
	{        
	        $w_status1=1-$w_status;
			if ($this->admin->toggle_user($w_id,$w_status1))
			{
				$this->session->set_flashdata('msg','<div class="">Successfully Updated.</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="">Oops! Error.  Please try again later!!!</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
	}
	
	
	public function usersms()
	{$data['query1']=$this->usermodal->get_warehouse();
		$this->load->view('header');
		$this->load->view('promosms',$data);
		$this->load->view('footer');
	}
	
	public function usersmssent()
	{   $w_id = $this->input->post('w_id');
	
        $data['msg'] = $this->input->post('msg');
        $data['query']=$this->usermodal->get_user_wid($w_id);
        
		$this->load->view('header');
		$this->load->view('sms/promosms',$data);
		$this->load->view('footer');
	}
	public function userssms($mobile)
	{   $data['mobile']=$mobile;
		$this->load->view('header');
		$this->load->view('singlesms',$data);
		$this->load->view('footer');
	}
	
	public function usersmssents()
	{   $data['msg'] = $this->input->post('msg');
	    $data['u_contact'] = $this->input->post('u_contact');
        $this->load->view('header');
		$this->load->view('sms/promosms1',$data);
		$this->load->view('footer');
	}
	

		
	}
