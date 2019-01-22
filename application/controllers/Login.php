<?php
class login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','html'));
		$this->load->library(array('session', 'form_validation','cart'));
		$this->load->database();
		$this->load->model('user');
	}
    public function index()
    {
		// get form input
		$u_mail = $this->input->post("u_mail");
        $u_pass = $this->input->post("u_pass");

		// form validation
		$this->form_validation->set_rules("u_mail", "Email-ID", "trim|required");
		$this->form_validation->set_rules("u_pass", "Password", "trim|required");
		
		if ($this->form_validation->run() == FALSE)
        {
			$this->load->view('header');
			$this->load->view('login');
			$this->load->view('footer');
		}
		else
		{
			// check for user credentials
			$uresult = $this->user->get_user($u_mail, $u_pass);
			if (count($uresult) > 0)
			{
				// set session
				
				$sess_data = array('login' => TRUE, 'u_name' => $uresult[0]->u_name,'u_lname' => $uresult[0]->u_lname, 'u_id' => $uresult[0]->u_id,'u_mail'=> $uresult[0]->u_mail,'u_contact'=> $uresult[0]->u_contact);

				$this->session->set_userdata($sess_data);
				 if ($cart = $this->cart->contents())
				 {
					foreach ($cart as $item)
					{
						$u_id=$this->session->userdata('u_id');
						$postid=$item['id'];
						$checkcart = $this->db->query('select * from cart 
					                            where p_id="'.$postid.'" 
					                            and u_id = "'.$u_id.'"');
						$resultcheckcart = $checkcart->num_rows();


						if($resultcheckcart == '0' ){
						$data=array('p_id'=>$postid,'u_id'=>$u_id);
						$this->db->insert('cart',$data);
						}
						else
						{

							echo '<script language="javascript">';
							echo 'alert("Already add to cart")';
							echo '</script>';
						}		
			    	}
			    }
				$this->cart->destroy();
				redirect('shop');
		    }
			else
			{
				$this->session->set_flashdata('msg', '<div class="alert text-center">Wrong Email-ID or Password!</div>');
				redirect('login/index');
			}
		}
    }
}