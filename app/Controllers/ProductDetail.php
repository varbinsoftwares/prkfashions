<?php

namespace App\Controllers;

class ProductDetail extends BaseController{
public function  __construct(){
    helper(['url','form']);
  }


	public function index()
	{
		
		return view('main_pages/productdetail');
	}
	
	
	
}
