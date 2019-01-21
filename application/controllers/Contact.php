<?php
class contact extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('user');
	}
	
	function index()
	{
		// set form validation rules
		$this->form_validation->set_rules('c_name', 'Name', 'trim|required|alpha|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('c_comp', 'Company', 'trim');
		$this->form_validation->set_rules('c_cont', 'Contact', 'trim');
		$this->form_validation->set_rules('c_city', 'City', 'trim');
		$this->form_validation->set_rules('c_country', 'Country', 'trim');
		$this->form_validation->set_rules('c_person', 'Person', 'trim');
		$this->form_validation->set_rules('c_message', 'Message', 'trim');
		
		if ($this->form_validation->run() == FALSE)
        {
			$this->load->view('header');
			$this->load->view('contact');
			$this->load->view('footer');

        }
		else
		{
			//insert message details into db
			$data = array(
				'c_name' => $this->input->post('c_name'),
				'c_comp' => $this->input->post('c_comp'),
				'c_cont' => $this->input->post('c_cont'),
				'c_city' => $this->input->post('c_city'),
				'c_country' => $this->input->post('c_country'),
				'c_person' => $this->input->post('c_person'),
				'c_message' => $this->input->post('c_message')
			);
				if ($this->user->insert_contact($data))
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
	}
