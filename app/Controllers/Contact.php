<?php

namespace App\Controllers;
 use CodeIgniter\Controller;


class Contact extends BaseController{
public function  __construct(){
    helper(['url','form']);
  }


	public function index()
	{
		return view('contact');

	}
	public function usercontact()
	{
	
	$name= $this->request->getPost('name');
	$customer_city = $this->request->getPost('customer_city');
    $customer_mail = $this->request->getPost('customer_mail');
    $customer_mob  = $this->request->getPost('customer_mob');
    $subject  = $this->request->getPost('subject');
    $comments  = $this->request->getPost('comments');
    
    $prkmodel= new \App\Models\PrkModel(); 


        $data=  [ 'name'=> $name,
                  'email'=>  $customer_mail,
                  'city' => $customer_city,
                  'mobile'=> $customer_mob,
                  'subject'=> $subject,
                  'message'	=> $comments
            
                  ] ;


        $added= $prkmodel->insert($data); 
                    
       if ($added) {
            $session= session();

             $session->setFlashdata("success", "Thanks! for contacting us. we will reach you soon.");
               return redirect()->to('contact'); 
              }
    
            else {

            $session->setFlashdata("error", "Failed to contact");
                return view('contact');
               }
      
	}


	
}
?>