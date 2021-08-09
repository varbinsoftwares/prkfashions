<?php

namespace App\Controllers;

class Home extends BaseController{
public function  __construct(){
    helper(['url','form']);
    
  }


	public function index()
	{
		 $prkmodel= new \App\Models\PrkModel(); 
		$products = $prkmodel->getProducts();
		$data["products"] = $products;


		$offermodel= new \App\Models\OfferModel(); 
		$productslide = $offermodel->productslide();
		$data["productslide"] = $productslide;
		
	

		$offermodel= new \App\Models\OfferModel(); 
		$productfeature = $offermodel->featuredproduct();
		$data["productfeature"] = $productfeature;

	
		
	      
		return view('index', $data);
	}

	public function productdetail($pid){

	

		$offermodel= new \App\Models\OfferModel(); 
		$productslide = $offermodel->productslide();
		$data["productslide"] = $productslide;
		return view('productdetail', $data);
	
	}
	
	
}
