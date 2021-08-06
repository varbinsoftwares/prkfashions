<?php

namespace App\Controllers;

class Blog extends BaseController{
public function  __construct(){
    helper(['url','form']);
  }


	public function index()
	{
		return view('blog');
	}
	
	
}
