<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ApiModel;
use DateTime;

class UserRegistration extends Controller {
   public function postRegister(Request $request){
   	//Retrieve the email input field
      $_SESSION['username'] = $request->txtEmailAddress;
      

      //Retrieve the phone input field
      $_SESSION['phone'] = $request->txtPhoneNumber;
    

      //Retrieve the name input field
      $_SESSION['fname'] = $request->input('firstName');
       
      
      //Retrieve the password input field
     $_SESSION['lname'] = $request->lastName;
       
     \DB::table('users')->insert(array(
      array('email' =>  $_SESSION['username'], 'fname' =>  $_SESSION['fname'], 'lname' =>  $_SESSION['lname'], 'phone' =>  $_SESSION['phone'], 'created_at' => new DateTime())

));
   return response()->json(['return' => 'some data']);
}
   
}