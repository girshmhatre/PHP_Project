<?php

class User extends MY_Controller {
	
	//==========================================Cart---------------------------------------
	
	
	
	
	
     

       
	   
    //-------------------------------//cart----------------------------------------
	
	public function view($page ='view1') 
	{
		$page =	str_replace(".php","",$page);
		if ( ! file_exists(APPPATH.'views/public/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
         $this->load->helper('form');
	     $this->load->view('public/'.$page);
		
	}
	
	public function index()
	{
		
		$this->load->view('public/index');
	}
	
	}