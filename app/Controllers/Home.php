<?php

namespace App\Controllers;

class Home extends BaseController{
public function  __construct(){
    helper(['url','form']);
  }


	public function index()
	{
		return view('index');
	}
}