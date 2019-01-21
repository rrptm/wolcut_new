<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pos extends CI_Controller {
    public function __construct()
	{	
		
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation','pagination','cart'));
		$this->load->database();
		$this->load->model('posmodal');
			if(!$this->session->userdata('a_id')){
                redirect('login', 'refresh');
         }

	}

	public function index()
	{   
		$data['query']=$this->posmodal->get_product();
		$data['query1']=$this->posmodal->get_category();
		$this->load->view('pos',$data);
	}
	
	public function invoice()
	{   
		$data['query']=$this->posmodal->get_product();
		$this->load->view('invoice',$data);
	}
	public function searchuser()
	{
		$json = [];
		if(!empty($this->input->get("q"))){
		    $q=$this->input->get("q");
			$this->db->like('u_card', $q);
			$this->db->or_like('u_contact', $q);
			$query = $this->db->select('u_id,u_card as text')
						->limit(10)
						->get("user");
			$json = $query->result();
		}

		
		echo json_encode($json);
	}
	
	function get_autocomplete(){
		if (isset($_GET['term'])) {
		  	$result = $this->posmodal->search_user($_GET['term']);
		   	if (count($result) > 0) {
		    foreach ($result as $row)
		     	$arr_result[] = array(
					'label'	=> $row->u_card,
					'u_id'	=> $row->u_id,
					'u_amount'	=> $row->u_amount,
					'u_name'	=> $row->u_name
				);
		     	echo json_encode($arr_result);
		   	}
		}
	}
    
	function viewsort(){

        $keywords = $this->input->post('keywords');
        $category = $this->input->post('category');
        if($category!=0)
        {
       $data['query']=$this->posmodal->productfilter($keywords,$category);}
       else
       {$data['query']=$this->posmodal->productfilter1($keywords);}
		$this->load->view('posproductfilter',$data);
    }
	public function itemadd()
	{
	 
		$data = array(
        'id'  =>$this->input->post('id'),
        'qty'     => $this->input->post('qty'),
        'price'   => 0,
        'name'    => 'pos'
		);
		$this->cart->insert($data);
		$this->load->view('posbill');
	

	}
	function removecart() 
	{
             $rowid =$this->input->post('id');
			if ($rowid==="all"){
			$this->cart->destroy();
		}else{
			$data = array(
				'rowid'   => $rowid,
				'qty'     => 0
			);
			$this->cart->update($data);
		}
		$this->load->view('posbill');
		
	}
	
	function updatecart()
	{
         $data = array(
        'rowid' => $this->input->post('id'),
        'qty'   => $this->input->post('qty')
	);
        $this->cart->update($data);
		$this->load->view('posbill');
	}
	public function posorder()
	{
	 if(!empty($this->input->post('u_id'))){
	 $u_id=$this->input->post('u_id');
	 $amount=$this->input->post('amount');
            $txnid=Time();
            if( $this->input->post('pay_mode')=="Counter")
            {
                $o_status="1";
                $data3=array(
                
            	'a_id'=>$this->session->userdata('a_id'),
            	'o_wid'=>$this->session->userdata('a_wid'),
                'txnid'=> $txnid,
                'amount'=>$this->input->post('amount'),
            	'u_id'=>$this->input->post('u_id'),
            	'u_card'=>$this->input->post('title'),
                'p_id'=>$this->input->post('pid'),
                'p_sp'=>$this->input->post('pc'),
                'p_qty'=>$this->input->post('qty'),
                'o_time'=>date('Y-m-d H:i:s',strtotime('now')),
                'payment_mode' =>  $this->input->post('pay_mode'),
                'o_status' =>  $o_status);
                $details=$this->posmodal->userbyid($u_id);
               if(!empty($details)){
                   if($details[0]->u_amount>=$amount){
                       $u_amount =$details[0]->u_amount-$amount;
                       $data = array
			        ('u_amount' => $u_amount);
			        $data1 = array
			        (
        				'u_amount' => $u_amount,
        				'p_type' => "Card",
        				'u_id' => $details[0]->u_id,
        				'a_id' => $this->session->userdata('a_id'),
        				'p_c' => "Debit",
        				
        			);
			       if ($this->posmodal->update_user_amount($u_id,$data))
			       {            
			                    $this->posmodal->update_user_account($data1);
                                $result1=$this->posmodal->orderdetails($data3);
                                $this->cart->destroy();
                                $data3['u_amount']= $u_amount;
                                $data3['u_add']=$details[0]->u_add;
                                $this->load->view('invoice',$data3);
                       
                   }
                   else{
                        $this->session->set_flashdata('msg','<div class="">Error in Balance Deduction</div>');
				         redirect($_SERVER['HTTP_REFERER']);
                    }
                   }
                   else
                   {
                       	$this->session->set_flashdata('msg','<div class="">Low Balance</div>');
				redirect($_SERVER['HTTP_REFERER']);
                   }
               }
            }
            elseif( $this->input->post('pay_mode')=="Home")
            {
                $o_status="0";   
                $data3=array(
                
            	'a_id'=>$this->session->userdata('a_id'),
            	'o_wid'=>$this->session->userdata('a_wid'),
                'txnid'=> $txnid,
                'amount'=>$this->input->post('amount'),
            	'u_id'=>$this->input->post('u_id'),
            	'u_card'=>$this->input->post('title'),
                'p_id'=>$this->input->post('pid'),
                'p_sp'=>$this->input->post('pc'),
                'p_qty'=>$this->input->post('qty'),
                'o_time'=>date('Y-m-d H:i:s',strtotime('now')),
                'payment_mode' =>  $this->input->post('pay_mode'),
                'o_status' =>  $o_status);
                $details=$this->posmodal->userbyid($u_id);
               if(!empty($details)){
                   if($details[0]->u_amount>=$amount){
                       $u_amount =$details[0]->u_amount-$amount;
                       $data = array
			        ('u_amount' => $u_amount);
			        $data1 = array
			        (
        				'u_amount' => $u_amount,
        				'p_type' => "Card",
        				'u_id' => $details[0]->u_id,
        				'a_id' => $this->session->userdata('a_id'),
        				'p_c' => "Debit",
        				
        			);
			       if ($this->posmodal->update_user_amount($u_id,$data))
			       {            
			                    $this->posmodal->update_user_account($data1);
                                $result1=$this->posmodal->orderdetails($data3);
                                $this->cart->destroy();
                                $data3['u_amount']= $u_amount;
                                $data3['u_add']=$details[0]->u_add;
                                $this->load->view('invoice',$data3);
                       
                   }
                   else{
                        $this->session->set_flashdata('msg','<div class="">Error in Balance Deduction</div>');
				         redirect($_SERVER['HTTP_REFERER']);
                    }
                   }
                   else
                   {
                       	$this->session->set_flashdata('msg','<div class="">Low Balance</div>');
				redirect($_SERVER['HTTP_REFERER']);
                   }
               }
            } 
            elseif( $this->input->post('pay_mode')=="Cod")
            {
                $o_status="0";  
                $data3=array(
                
            	'a_id'=>$this->session->userdata('a_id'),
            	'o_wid'=>$this->session->userdata('a_wid'),
                'txnid'=> $txnid,
                'amount'=>$this->input->post('amount'),
            	'u_id'=>$this->input->post('u_id'),
            	'u_card'=>$this->input->post('title'),
                'p_id'=>$this->input->post('pid'),
                'p_sp'=>$this->input->post('pc'),
                'p_qty'=>$this->input->post('qty'),
                'o_time'=>date('Y-m-d H:i:s',strtotime('now')),
                'payment_mode' =>  $this->input->post('pay_mode'),
                'o_status' =>  $o_status);
                $details=$this->posmodal->userbyid($u_id);
               if(!empty($details)){
                       $u_amount =$details[0]->u_amount-$amount;
                       $data = array
			        ('u_amount' => $u_amount);
			        $data1 = array
			        (
        				'u_amount' => $u_amount,
        				'p_type' => "Cod",
        				'u_id' => $details[0]->u_id,
        				'a_id' => $this->session->userdata('a_id'),
        				'p_c' => "Debit",
        				
        			);
			          if ($this->posmodal->update_user_amount($u_id,$data))
			          {            
			                    $this->posmodal->update_user_account($data1);
                                $result1=$this->posmodal->orderdetails($data3);
                                $this->cart->destroy();
                                $data3['u_amount']= $u_amount;
                                $data3['u_add']=$details[0]->u_add;
                                $this->load->view('invoice',$data3);
                       
                       }
                   else{
                        $this->session->set_flashdata('msg','<div class="">Error in Balance Deduction</div>');
				         redirect($_SERVER['HTTP_REFERER']);
                       }
                   
               }
            }
            
       }
	   else
	   { 	$this->session->set_flashdata('msg','<div class="">Fill Customer Id or Card Number</div>');
				redirect($_SERVER['HTTP_REFERER']);}
}
    

	public function homedelivery()
	{   $txnid=$this->input->post('txnid');
	    $u_card=$this->input->post('u_card');
	
            $data=array(
                
            	'o_add'=>$this->input->post('o_add')
            	);
                $details=$this->posmodal->addupdate($txnid,$u_card,$data);
			      
    }
    
}
