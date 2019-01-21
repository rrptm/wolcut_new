<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class productmodal extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	function get_product()
	{   
	    $this->db->join('category', 'category.c_id = product.p_category');
	    $this->db->join('brand', 'brand.b_id = product.p_brand');
        $query = $this->db->get('product');
		return $query->result();
	}
	function productbyid($p_id)
	{
		$this->db->where('p_id', $p_id);
        $query = $this->db->get('product');
		return $query->result();
	}
	function update_product($p_id,$data)
	{
		$this->db->where('p_id', $p_id);
		return $this->db->update('product', $data);
		
	}
	function add_product($data)
	{
		return $this->db->insert('product', $data);
	}
    function insert_productimage($data)
    {
		return $this->db->insert('image', $data);
	}
	function get_product_image($p_id)
	{  
		$this->db->where('p_id', $p_id);
        $query = $this->db->get('image');
		return $query->result();
	}
	function toggle_product($p_id,$status)
	{
		$this->db->where('p_id', $p_id);
		$data['p_status'] = $status;
		return $this->db->update('product', $data);
	}
	public function update_product_meta($data,$p_id)
	{
		$this->db->where('p_id', $p_id);
		return $this->db->update('product',$data);
	}
	
	function get_category()
	{
        $query = $this->db->get('category');
		return $query->result();
	}
	function get_brand()
	{
        $query = $this->db->get('brand');
		return $query->result();
	}
	function add_category($data)
	{
		return $this->db->insert('category', $data);
	}
	
	public function showstockware($id)
	{
		$this->db->where('s_pid', $id);
		$this->db->join('warehouse', 'warehouse.w_id = stockware.s_wid');
		$query=$this->db->get('stockware');
		return $query->result();
	}
	function insert_stockware($s_pid,$s_wid,$s_qty)
    {
    	$this->db->select('s_id');
		$this->db->from('stockware');
		$this->db->where(array('s_pid'=>$s_pid,'s_wid'=>$s_wid));
		$prevQuery = $this->db->get();
		$prevCheck = $prevQuery->num_rows();
		if($prevCheck > 0){
		}
		else{
			$data = array('s_pid'=>$s_pid,'s_wid'=>$s_wid,'s_qty'=>$s_qty);
		return $this->db->insert('stockware', $data);
		}
	}
	function insert_attributevalue($pid,$size,$color,$qty)
    {
    	$this->db->select('pattr_id');
		$this->db->from('productattr');
		$this->db->where(array('p_id'=>$pid,'size'=>$size,'color'=>$color));
		$prevQuery = $this->db->get();
		$prevCheck = $prevQuery->num_rows();
		if($prevCheck > 0){
		}
		else{
			$data = array('p_id'=>$pid, 'size'=>$size, 'color'=>$color,'qty'=>$qty);
		return $this->db->insert('productattr', $data);
		}
	}

	public function showpattribute($id)
	{
		$this->db->where('p_id', $id);
		$query=$this->db->get('productattr');
		return $query->result();
	}
    function insert_sale($data)
    {
		return $this->db->insert('sale', $data);
	}
	function update_sale($s_id,$data)
	{
		$this->db->where('s_id', $s_id);
		return $this->db->update('sale', $data);
		
	}
      public function showsale()
	{
		$query=$this->db->get('sale');;
		return $query->result();
	} 
	 function insert_attribute($data)
    {
		return $this->db->insert('attribute', $data);
	}
	public function showattribute()
	{
		$query=$this->db->get('attribute');;
		return $query->result();
	} 
	function insert_attributev($data)
    {
		return $this->db->insert('attributevalue', $data);
	}
	public function showattributev()
	{
		$query=$this->db->get('attributevalue');;
		return $query->result();
	}
	public function showsale_id($s_id)
	{
		$this->db->where('s_id', $s_id);
		$query=$this->db->get('sale');;
		return $query->result();
	}
        public function deletesale($id)
	{
		$this->db->where('s_id', $id);
	    return($this->db->delete('sale'));
	}
	function toggle_sale($s_id,$s_status)
	{
		$this->db->where('s_id', $s_id);
		$data['s_status'] = $s_status;
		return $this->db->update('sale', $data);
	}

        function insert_promocode($data)
        {
		return $this->db->insert('promocode', $data);
	}
        public function showpromocode()
	{
		$query=$this->db->get('promocode');;
		return $query->result();
	}
        public function deletepromocode($pr_id)
	{
		$this->db->where('pr_id', $pr_id);
	return($this->db->delete('promocode'));
	}
	function toggle_promo($pr_id,$pr_status)
	{
		$this->db->where('pr_id', $pr_id);
		$data['pr_status'] = $pr_status;
		return $this->db->update('promocode', $data);
	}


}?>