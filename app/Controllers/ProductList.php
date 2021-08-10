<?php

namespace App\Controllers;

class ProductList extends BaseController{
public function  __construct(){
    helper(['url','form']);
   
    $pager = \Config\Services::pager();
  }
  public function mensfashion()
  {
    $prkmodel= new \App\Models\PrkModel(); 
    $products = $prkmodel->getProducts();
    $data["products"] = $products;

    $offermodel= new \App\Models\OfferModel(); 
  
	$productfeature = $offermodel->featuredproduct();
	$data["productfeature"] = $productfeature;

    $offermodel= new \App\Models\OfferModel(); 
	$productslide = $offermodel->productslide();
	$data["productslide"] = $productslide;

	

      return view ('categorylist/mensfashion/productlist', $data);
  }
}