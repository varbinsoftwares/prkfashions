<?php 

namespace App\Models;
use CodeIgniter\Model;

class OfferModel extends Model{

    function productslide()
    {
      $slidearray = array(
        "SIS_URB1"=>array(
          "main_image"=>"1.jpg",
          "images"=>["1.jpg"],
          "title"=>"Pure Cotton Black strip Shirt",
          "tag"=>"Shirt",
          "price"=>"520.00"
        ),
        "SIS_URB2"=>array(
            "main_image"=>"2.jpg",
            "images"=>["2.jpg"],
            "title"=>"Pure Cotton Black strip Shirt",
            "tag"=>"Shirt",
            "price"=>"520.00"
          ),
        "SIS_URB3"=>array(
            "main_image"=>"3.jpg",
            "images"=>["3.jpg"],
            "title"=>"Pure Cotton Black strip Shirt",
            "tag"=>"Shirt",
            "price"=>"520.00"
          ),
       
        "SIS_URB4"=>array(
            "main_image"=>"4.jpg",
            "images"=>["4.jpg"],
            "title"=>"Pure Cotton Black strip Shirt",
            "tag"=>"Shirt",
            "price"=>"520.00"
          ),
      
        "SIS_URB5"=>array(
            "main_image"=>"5.jpg",
            "images"=>["5.jpg"],
            "title"=>"Pure Cotton Black strip Shirt",
            "tag"=>"Shirt",
            "price"=>"520.00"
          ),
     
        "SIS_URB7"=>array(
            "main_image"=>"7.jpg",
            "images"=>["7.jpg"],
            "title"=>"Pure Cotton Black strip Shirt",
            "tag"=>"Shirt",
            "price"=>"520.00"
          ),
          "SIS_URB8"=>array(
            "main_image"=>"8.jpg",
            "images"=>["8.jpg"],
            "title"=>"Pure Cotton Black strip Shirt",
            "tag"=>"Shirt",
            "price"=>"520.00"
          ),
          "SIS_URB9"=>array(
            "main_image"=>"9.jpg",
            "images"=>["9.jpg"],
            "title"=>"Pure Cotton Black strip Shirt",
            "tag"=>"Shirt",
            "price"=>"520.00"
          ),
      ); 
      return $slidearray; 
    }

    function featuredproduct()
    {
      $featuredarray = array(
        "HKP-ZP1"=>array(
          "main_image"=>"1.jpg",
          "images"=>["1.jpg"],
          "title"=>"printed T-shirt",
          "tag"=>"T-Shirt",
          "price"=>"307.00"
        ),
        "HKP-ZP2"=>array(
            "main_image"=>"2.jpg",
            "images"=>["2.jpg"],
            "title"=>"printed T-shirt",
            "tag"=>"T-Shirt",
            "price"=>"307.00"
          ),
        "HKP-ZP3"=>array(
            "main_image"=>"3.jpg",
            "images"=>["3.jpg"],
            "title"=>"printed T-shirt",
            "tag"=>"T-Shirt",
            "price"=>"307.00"
          ),
         
    );
     
    return  $featuredarray;
    }
    
   
}


    
    ?>