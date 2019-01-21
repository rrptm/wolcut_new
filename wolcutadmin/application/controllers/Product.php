<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller {
    public function __construct()
	{	
		
		parent::__construct();
		$this->load->helper(array('form','url', 'html','text','typography','date'));
		$this->load->library(array('session', 'form_validation','pagination','cart'));
		$this->load->database();
		$this->load->model('productmodal');
			if(!$this->session->userdata('a_id')){
                redirect('login', 'refresh');
             }
             elseif($this->session->userdata('a_design')=="Billing" ){ redirect('Home', 'refresh');}
         

	}
	public function index()
	{   
		$data['query']=$this->productmodal->get_product();
		$this->load->view('header');
		$this->load->view('viewproduct',$data);
		$this->load->view('footer');
	}
	public function insertproduct()
	{
		$data['query1']=$this->productmodal->get_category();
		$data['query2']=$this->productmodal->get_brand();
		$this->load->view('header');
		$this->load->view('product',$data);
		$this->load->view('footer');
	}
	public function add_product()
	{   
		if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = '../uploads/product';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = time()."product";
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                     $this->gallery_path = realpath(APPPATH . '../../uploads/product');//fetching path
                     $config1 = array(
                          'source_image' => $uploadData['full_path'], //get original image
                          'new_image' => $this->gallery_path.'/thumb/', //save as new image //need to create thumbs first
                          'maintain_ratio' => TRUE,
                          'height' => 300
                           
                        );
                        $this->load->library('image_lib', $config1); //load library
                        $this->image_lib->resize(); //generating thumb

                    $picture = $uploadData['file_name'];
                }
                else{
                    $picture = '';
            }
            }else{
                $picture = '';
            }
			$data = array
			(
				'p_name' => $this->input->post('p_name'),
				'p_desc' => ascii_to_entities($this->input->post('p_desc')),
				'p_adddesc' => ascii_to_entities($this->input->post('p_adddesc')),
				'p_sp' => $this->input->post('p_sp'),
				'p_stock' => $this->input->post('p_stock'),
				'p_category' => $this->input->post('p_category'),
				'p_brand' => $this->input->post('p_brand'),
				'p_mstock' => $this->input->post('p_mstock'),
				'p_status' => $this->input->post('p_status'),
				'p_image' => $picture
			);
			
			if ($this->productmodal->add_product($data))
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
	public function seo($p_id)
	{	
		$this->form_validation->set_rules('mtitle', 'mtitle', 'required');
		   
		if ($this->form_validation->run() == FALSE)
        {   $details=$this->productmodal->productbyid($p_id);
        	$data['mtitle']=$details[0]->mtitle;
        	$data['mdescr']=$details[0]->mdescr;
        	$data['mkey']=$details[0]->mkey;
        	$data['p_id']=$details[0]->p_id;
        	$this->load->view('header');
			$this->load->view('seo',$data);
			$this->load->view('footer');
        }
		else
		{   $p_id = $this->input->post('p_id');
                        
			$data = array(
				
				'mtitle' => $this->input->post('mtitle'),
				'mdescr' =>ascii_to_entities($this->input->post('mdescr')),
				'mkey' =>ascii_to_entities($this->input->post('mkey'))
			);
			if($this->productmodal->update_product_meta($data,$p_id))
			{       
			$this->session->set_flashdata('msg','<div> Successfully Updated</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div>Oops! Error.  Something Went Wrong</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
	    }
   }
	public function productimage($pid)
	{	$this->form_validation->set_rules('p_id', 'p_id', 'required');
		if ($this->form_validation->run() == FALSE)
        {		$data['p_id']=$pid;
    			$data['query1']=$this->productmodal->get_product_image($pid);
        	    $this->load->view('header');
				$this->load->view('productimage',$data);
				$this->load->view('footer');

        }
		else
		{
		if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = '../uploads/product';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = time()."product";
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                     $this->gallery_path = realpath(APPPATH . '../../uploads/product');//fetching path
                     $config1 = array(
                          'source_image' => $uploadData['full_path'], //get original image
                          'new_image' => $this->gallery_path.'/thumb/', //save as new image //need to create thumbs first
                          'maintain_ratio' => TRUE,
                          'height' => 300
                           
                        );
                        $this->load->library('image_lib', $config1); //load library
                        $this->image_lib->resize(); //generating thumb

                    $picture = $uploadData['file_name'];
                }
                else{
                    $picture = '';
            }
            }else{
                $picture = '';
            }
            
			$data = array(
				'p_id'=>$this->input->post('p_id'),
				'img' => $picture
			);
		if($this->productmodal->insert_productimage($data))
		{
			$this->session->set_flashdata('msg','<div> Successfully Updated</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div>Oops! Error.  Something Went Wrong</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
		} 
	
		
	}
	public function remove_image()
    {
        $id=$this->input->post('id');
        $delpicture= $this->input->post('name');
                        if(!empty($picture))
                        {
                        unlink("../uploads/product".$delpicture);
                        unlink("../uploads/product/thumb/".$delpicture);
                         }
        $this->db->delete('image', array('id'=>$id));
    }
	public function duplicate_product()
	{   
		if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = '../uploads/product';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = time()."product";
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                     $this->gallery_path = realpath(APPPATH . '../../uploads/product');//fetching path
                     $config1 = array(
                          'source_image' => $uploadData['full_path'], //get original image
                          'new_image' => $this->gallery_path.'/thumb/', //save as new image //need to create thumbs first
                          'maintain_ratio' => TRUE,
                          'height' => 300
                           
                        );
                        $this->load->library('image_lib', $config1); //load library
                        $this->image_lib->resize(); //generating thumb

                    $picture = $uploadData['file_name'];
                }
                else{
                    $picture = '';
            }
            }else{
                $picture = '';
            }
			$data = array
			(
				'p_name' => $this->input->post('p_name'),
				'p_desc' => ascii_to_entities($this->input->post('p_desc')),
				'p_adddesc' => ascii_to_entities($this->input->post('p_adddesc')),
				'p_sp' => $this->input->post('p_sp'),
				'p_stock' => $this->input->post('p_stock'),
				'p_category' => $this->input->post('p_category'),
				'p_brand' => $this->input->post('p_brand'),
				'p_mstock' => $this->input->post('p_mstock'),
				'p_status' => $this->input->post('p_status'),
				'p_image' => $picture
			);
			
			if ($this->productmodal->add_product($data))
			{
				$this->session->set_flashdata('msg','<div class="">Successfully Updated.</div>');
				redirect('product');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="">Oops! Error.  Please try again later!!!</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
		
	}
	public function product_id($p_id)
	{   $details=$this->productmodal->productbyid($p_id);
		$data['query1']=$this->productmodal->get_category();
		$data['query2']=$this->productmodal->get_brand();
        	    	$data['p_id'] = $details[0]->p_id;
        			$data['p_name'] = $details[0]->p_name;
        			$data['p_desc'] = $details[0]->p_desc;
        			$data['p_adddesc'] = $details[0]->p_adddesc;
					$data['p_sp'] = $details[0]->p_sp;
					$data['p_mstock'] = $details[0]->p_mstock;
					$data['p_stock'] = $details[0]->p_stock;
					$data['p_brand'] = $details[0]->p_brand;
					$data['p_category'] = $details[0]->p_category;
					$data['p_image'] = $details[0]->p_image;
     			$this->load->view('header');
				$this->load->view('productbyid',$data);
				$this->load->view('footer');}
				
	public function product_stock_id($p_id)
	{   $details=$this->productmodal->productbyid($p_id);
		$data['query']=$this->productmodal->showattribute();
        $data['query1']=$this->productmodal->showattributev();
        $data['query2']=$this->productmodal->showpattribute($p_id);
        	    $data['p_id'] = $details[0]->p_id;
			    $data['p_stock'] = $details[0]->p_stock;
     			$this->load->view('header');
				$this->load->view('productstockid',$data);
				$this->load->view('footer');}
	
	public function duplicate($p_id)
	{   $details=$this->productmodal->productbyid($p_id);
		$data['query1']=$this->productmodal->get_category();
		$data['query2']=$this->productmodal->get_brand();
        	    	$data['p_id'] = $details[0]->p_id;
        			$data['p_name'] = $details[0]->p_name;
        			$data['p_desc'] = $details[0]->p_desc;
        			$data['p_adddesc'] = $details[0]->p_adddesc;
					$data['p_sp'] = $details[0]->p_sp;
					$data['p_stock'] = $details[0]->p_stock;
					$data['p_mstock'] = $details[0]->p_mstock;
					$data['p_category'] = $details[0]->p_category;
					$data['p_brand'] = $details[0]->p_brand;
					$data['p_image'] = $details[0]->p_image;
     			$this->load->view('header');
				$this->load->view('duplicate',$data);
				$this->load->view('footer');}
	public function update_product($p_id)
	{	if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = '../uploads/product';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = time()."product";
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                     $this->gallery_path = realpath(APPPATH . '../../uploads/product');//fetching path
                     $config1 = array(
                          'source_image' => $uploadData['full_path'], //get original image
                          'new_image' => $this->gallery_path.'/thumb/', //save as new image //need to create thumbs first
                          'maintain_ratio' => TRUE,
                          'height' => 300
                           
                        );
                        $this->load->library('image_lib', $config1); //load library
                        $this->image_lib->resize(); //generating thumb

                    $picture = $uploadData['file_name'];
                }
                else{
                    $picture = '';
            }
            }else{
                $picture = '';
            }
            $p_id=$this->input->post('p_id');
		 	$del_image=$this->input->post('p_image');
		 	if(!empty($picture))
		 	{
		 		unlink("../uploads/product/".$del_image);
		 		unlink("../uploads/product/thumb/".$del_image);
		 	}
		 	else{$picture=$del_image;}

			$data = array
			(
				'p_name' => $this->input->post('p_name'),
				'p_desc' => ascii_to_entities($this->input->post('p_desc')),
				'p_adddesc' => ascii_to_entities($this->input->post('p_adddesc')),
				'p_sp' => $this->input->post('p_sp'),
				'p_stock' => $this->input->post('p_stock'),
				'p_mstock' => $this->input->post('p_mstock'),
				'p_brand' => $this->input->post('p_brand'),
				'p_category' => $this->input->post('p_category'),
				'p_status' => $this->input->post('p_status'),
				'p_image' => $picture
			);
			
			if ($this->productmodal->update_product($p_id,$data))
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
    
    public function addstock_product($p_id)
	{	
            $p_id=$this->input->post('p_id');
			$qty=$this->input->post('qty');
			$size=$this->input->post('Size');
			$color=$this->input->post('Color');
			if(!empty($size)){
			foreach ($size as $row)
			{
				foreach ($color as $row1) 
				{
					if(!empty($row1))
					{ 
						$this->productmodal->insert_attributevalue($p_id,$row,$row1,$qty);

					}	
				}
			}}
            
			$this->session->set_flashdata('msg','<div class="">Successfully Added</div>');
			redirect($_SERVER['HTTP_REFERER']);
			
	}
    
	public function insertattribute()
	{	$this->form_validation->set_rules('attr_name', 'attr_name', 'required');
		if ($this->form_validation->run() == FALSE)
        {
        	$details['query']=$this->productmodal->showattribute();
     		$this->load->view('header');
			$this->load->view('attribute',$details);
			$this->load->view('footer');
        }
		else
		{
			$data = array(
				
				'attr_name' => $this->input->post('attr_name')
			);


					    
			
			$result=$this->productmodal->insert_attribute( $data);
		if ($result)
			{
				$this->session->set_flashdata('msg','<div class=""> Successfully Updated</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div>Oops! Error.  Something Went Wrong</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
	
		
	}

	public function insertattributev()
	{	$this->form_validation->set_rules('attrv_name', 'attrv_name', 'required');
		if ($this->form_validation->run() == FALSE)
        {
        	$details['query1']=$this->productmodal->showattribute();
        	$details['query']=$this->productmodal->showattributev();
     		$this->load->view('header');
			$this->load->view('attributev',$details);
			$this->load->view('footer');
        }
		else
		{
			$data = array(
				
				'attr_id' => $this->input->post('attr_id'),
				'attrv_name' => $this->input->post('attrv_name'),
				'attrv_descr' => $this->input->post('attrv_descr')
			);


					    
			
			$result=$this->productmodal->insert_attributev( $data);
		if ($result)
			{
				$this->session->set_flashdata('msg','<div class=""> Successfully Updated</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div>Oops! Error.  Something Went Wrong</div>');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
	
		
	}

	public function toggle_product($w_id,$w_status)
	{        
	        $w_status1=1-$w_status;
			if ($this->productmodal->toggle_product($w_id,$w_status1))
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
	

    public function attributevalue($pid)
	{	
		$details['pid']=$pid;
		$this->form_validation->set_rules('qty', 'qty', 'required');
		if ($this->form_validation->run() == FALSE)
        {		$details['query1']=$this->user->showattribute($pid);
        		$details['query3']=$this->user->showsize();
        		$details['query5']=$this->user->showsizek();
        		$details['query6']=$this->user->showtype();    
     			$this->load->view('header');
				$this->load->view('attributevalue',$details);
				$this->load->view('footer');
		}
		else
		{	
			$pid=$this->input->post('productid');
			$qty=$this->input->post('qty');
			$size=$this->input->post('size');
			$sizek=$this->input->post('sizek');
			$color=$this->input->post('color');

                        if(!empty($size)){
			foreach ($size as $row)
			{
				foreach ($color as $row1) 
				{
					if(!empty($row1))
					{
						$this->user->insert_attributevalue($pid,$row,$row1,$qty);
					}	
				}
			}}
                        if(!empty($sizek)){
			foreach ($sizek as $row)
			{
				foreach ($color as $row1) 
				{
					if(!empty($row1))
					{
						$this->user->insert_attributevalue($pid,$row,$row1,$qty);
					}	
				}
			}}
			
			$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('admin/attributevalue/'. $pid);
			
		} 
	
		
	}
	 public function updateqty()
    {
    	$id=$this->input->post('id');
    	$item=$this->input->post('item');
		$this->db->query('update productattr set qty="'.$item.'" where pattr_id="'.$id.'"');
    }
     public function attributevaluereset()
    {
    	$id=$this->input->post('id');
		$this->db->delete('productattr', array('p_id'=>$id));
    }

	}
