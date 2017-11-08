<?php
/**
* 
*/
class Cart extends CI_Controller
{
	
	function index()
	{
		$data["products"]=$this->Model1->all_product();
		$this->load->view("cart_view",$data);
	}

	function add()
	{
		$insert_data=array(
			"id" => $this->input->post("id"),
			"name" => $this->input->post("name"),
			"price" =>$this->input->post("price"),
			"qty" =>1
			);
		$this->cart->insert($insert_data);
		redirect("Cart");
	}

	function remove()
	{
		$this->cart->destroy();
		redirect("Cart");
	}

	function cart_product()
	{
		$this->load->view("cart_product");
	}

	function update()
	{
		if($this->input->post("update_cart"))
		{
			unset($_POST["update_cart"]);
			$contents=$this->input->post();
			foreach($contents as $content)
			{
				$info=array(
					"rowid" => $content["rowid"],
					"qty" => $content["qty"]
					);
				$this->cart->update($info);
			}
		}
		$this->cart_product();
	}

}
?>