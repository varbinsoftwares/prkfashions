<?php 
  
  namespace App\Models;
  use CodeIgniter\Model;

class PrkModel extends Model{


   protected $table= 'contact';
   protected $primaryKey= 'id';
   protected $useAutoIncrement     = true;
   protected $allowedFields = ['name', 'email', 'city','mobile','subject','message'];
}

 



 ?>