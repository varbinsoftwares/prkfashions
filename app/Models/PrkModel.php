<?php 

namespace App\Models;
use CodeIgniter\Model;

class PrkModel extends Model{


 protected $table= 'contact';
 protected $primaryKey= 'id';
 protected $useAutoIncrement     = true;
 protected $allowedFields = ['name', 'email', 'city','mobile','subject','message'];

 function getProducts(){
  $productarray = array(
    "JJT_803"=>array(
    "main_image"=>"1.jpg",
    "images"=>["1.jpg", "2.jpg"],
    "title"=>"Pure Cotton Blue Strip Shirt",
    "tag"=>"Shirt",
    "price"=>"250.00"
  ),
 "JJT_804"=>array(
    "main_image"=>"1.jpg",
    "images"=>["1.jpg", "2.jpg"],
    "title"=>"Pure Cotton Red & Pink Strip Shirt",
    "tag"=>"Shirt",
    "price"=>"250.00"
  ),
  "JJT_817"=>array(
    "main_image"=>"1.jpg",
    "images"=>["1.jpg", "2.jpg"],
    "title"=>"Pure Cotton Brown Strip Shirt",
    "tag"=>"Shirt",
    "price"=>"250.00"
  ),
 "JJT_818"=>array(
    "main_image"=>"1.jpg",
    "images"=>["1.jpg", "2.jpg"],
    "title"=>"Pure Cotton Strip Shirt",
    "tag"=>"Shirt",
    "price"=>"250.00"
  ),
 "JJT_508"=>array(
    "main_image"=>"1.jpg",
    "images"=>["1.jpg", "2.jpg"],
    "title"=>"Pure Cotton Red & Navy blue Checked Shirt",
    "tag"=>"Shirt",
    "price"=>"250.00"
  ),

  "JJT_950"=>array(
    "main_image"=>"1.jpg",
    "images"=>["1.jpg", "2.jpg"],
    "title"=>"Pure Cotton Dotted Black Shirt",
    "tag"=>"Shirt",
    "price"=>"260.00"
  ),
  "JJT_950_1"=>array(
    "main_image"=>"1.jpg",
    "images"=>["1.jpg", "2.jpg"],
    "title"=>"Pure Cotton Green printed Shirt",
    "tag"=>"Shirt",
    "price"=>"260.00"
  ),
   "JJT_961"=>array(
    "main_image"=>"1.jpg",
    "images"=>["1.jpg", "2.jpg"],
    "title"=>"Pure Cotton Plain Black Shirt",
    "tag"=>"Shirt",
    "price"=>"260.00"
  ),
   "JJT_961_1"=>array(
    "main_image"=>"1.jpg",
    "images"=>["1.jpg", "2.jpg"],
    "title"=>"Pure Cotton Blue and White Printed Shirt",
    "tag"=>"Shirt",
    "price"=>"260.00"
  ),
   "JJT_957"=>array(
    "main_image"=>"1.jpg",
    "images"=>["1.jpg", "2.jpg"],
    "title"=>"Pure Cotton Dark Blue Printed Shirt",
    "tag"=>"Shirt",
    "price"=>"260.00"
  ),

 

 
);
  return $productarray;
}

 function productslide()
{
  $slidearray = array(
    "SIS_URB1"=>array(
      "main_image"=>"1.jpg",
      "images"=>["1.jpg",],
      "title"=>"Pure Cotton Dark Blue Printed Shirt",
      "tag"=>"Shirt",
      "price"=>"260.00"
    ),
  ); 
  return $productarray; 
}

}





?>