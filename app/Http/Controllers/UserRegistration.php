<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\ApiModel;
use DateTime;


class UserRegistration extends Controller {
    public function mailvalid( Request $request)
   {

    $input['email'] = Input::get('txtEmail');

    // Must not already exist in the `email` column of `users` table
    $rules = array('email' => 'unique:reg_user,email');

    $validator = Validator::make($input, $rules);

    if ($validator->fails()) {
       echo "User email Already Exist";
       
    }
    else{
    }
  }
   public function postRegister( Request $request)
   {

   

	
   	//Retrieve the email input field
      $_SESSION['username'] = $request->txtEmailAddress;
      

      //Retrieve the phone input field
      $_SESSION['phone'] = $request->txtPhoneNumber; 
    

      //Retrieve the name input field
      $_SESSION['fname'] = $request->firstName;
       
      
      //Retrieve the password input field
     $_SESSION['lname'] = $request->lastName;
       
     \DB::table('reg_user')->insert(array(
      array('email' =>  $_SESSION['username'], 'fname' =>  $_SESSION['fname'], 'lname' =>  $_SESSION['lname'], 'phone' =>  $_SESSION['phone'], 'credit_card' =>'', 'bill_address1' =>'', 'bill_address2' =>'', 'bill_city' =>'', 'bill_state' =>'', 'bill_zipcode' =>'', 'shipp_address1' =>'', 'shipp_address2' =>'', 'shipp_city' =>'', 'shipp_state' =>'', 'shipp_zipcode' =>'' )



));
   return response()->json(['return' => 'some data']);
}

      
      public function postPayment(Request $request){
      
      /* billing address */

      
       $_SESSION['credit_card'] = substr($request->txtCCNumber, -4);

      /* billing address */
    
      $_SESSION['address1'] = $request->txtBillingAddressOne;
      $_SESSION['address2'] = $request->txtBillingAddressTwo;
      $_SESSION['city'] = $request->txtBillingCity;
      $_SESSION['zipcode'] = $request->txtBillingZip;
      $_SESSION['state'] = $request->txtBillingState;
      /* shipping address */
      $_SESSION['ship_address1'] = $request->txtShippingAddressOne;
      $_SESSION['ship_address2'] = $request->txtShippingAddressTwo;
      $_SESSION['ship_city'] = $request->txtShippingCity;
      $_SESSION['ship_zipcode'] = $request->txtShippingZip;
      $_SESSION['ship_state'] = $request->txtShippingState;


  
      $_SESSION['email1'] = $request->txtEmailAddress1;
      //$mytime =Carbon::now();
      //$mytime = new DateTime();


     \DB::table('reg_user')->where('email',$_SESSION['email1'])->update(array( 'credit_card' => $_SESSION['credit_card'],'bill_address1' =>  $_SESSION['address1'],'bill_address2' =>$_SESSION['address2'],'bill_city' =>$_SESSION['city'],'bill_zipcode' =>$_SESSION['zipcode'],'bill_state' =>$_SESSION['state'], 'shipp_address1' =>  $_SESSION['ship_address1'],'shipp_address2' =>$_SESSION['ship_address2'],'shipp_city' =>$_SESSION['ship_city'],'shipp_zipcode' =>$_SESSION['ship_zipcode'],'shipp_state' =>$_SESSION['ship_state'])
        );  // update the record in the DB. 
      

     return response()->json(['return' => 'some data']);
   }
  
}