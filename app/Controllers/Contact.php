<?php

namespace App\Controllers;
 use CodeIgniter\Controller;


class Contact extends BaseController{
public function  __construct(){
    helper(['url','form']);
  }


	public function index()
	{
		return view('main_pages/contact');

	}
       
      



	
}
?>