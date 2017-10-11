<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class signupAuthController extends Controller
{
    public function showRegisterform()
    {
    	return view('includes.signup');
    }

    public function register(Request $Request)
    {
    	return $Request => all();
    }

public function store()
{
            $data =  Input::except(array('_token')) ;
            $rule  =  array(
                    'Name'       => 'required|unique:registered_users',
                    'LastName'   => 'required|registered_users',
                    'Email'      => 'required|email|unique:registered_users',
            
                ) ;
 
            $validator = Validator::make($data,$rule);
 
            if ($validator->fails())
            {
                    return Redirect::to('includes.signup')
                            ->withErrors($validator->messages());
            }
            else
            {
                    Register::saveFormData(Input::except(array('_token','cpassword')));
 
                    return Redirect::to('includes.signup')
                            ->withMessage('Data inserted');

            }

            





}

}




















