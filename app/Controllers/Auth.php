<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        return view('Auth/login');
    }
    public function register(){
        return view('Auth/register');
    }
    public function save(){
  //      $validation= $this->validate(['name'=> 'required',
  //      'email'=>'required|valid_email|is_unique[users.email]',
    //    'user_type'=>'required',
      //  'password'=>'required|min_length[5]max_length[12]',
        //'cpassword'=>'required|min_length[5]max_length[12]|matches[password]']);
    
 //   if(!$validation){
   //     return view('Auth/register',['validation'=>$this->validator]);
  //  }
  //  else{
   //     echo "Form validated successfully";}
    
   $validation = $this->validate ([
    'name'=>[
        'rules'=>'required',
        'errors'=>[
            'required'=>'Your full name is required'
        ]
        ],
        'email'=>[
            'rules'=>'required'|'valid_email'|'is_unique[users.email]',
            'errors'=>[
                'required'=>'Your email is required',
                'valid-email'=>'You must enter a valid email',
                'is_unique'=>'Email is already taken'

            ]
            ],
'password'=>[
    'rules'=>'required|min_length[5]|max_length[12]',
    'errors'=>[
        'min_length'=> 'Password must be atleast 5 characters long',
        'max_length'=> 'Passwprd must not exceed 12 characters'
    ]
    ],
    'cpassword'=>[
        'rules'=>'required|min_length[5]|max_length[12]',
        'errors'=>[
            'min_length'=> 'Password must be atleast 5 characters long',
            'max_length'=> 'Passwprd must not exceed 12 characters',
            'matches'=>'Password does not match'
        ]
    ]
    

        ]);
        if(!$validation){
            return view ('Auth/Register',['validation'=>$this->validator]);
        }
        else{
            $name= $this->request->getPost('name');
            $email= $this->request->getPost('email');
            $password= $this->request->getPost('password');
            $user_type= $this->request->getPost('user_type');

            $values=[
                'name'=>$name,
                'email'=>$email,
                'password'=>$password,
                'user_type'=>$user_type
            ];
            $usersModel= new \App\Models\UsersModel();
            $query= $usersModel->insert($values);
            if(!$query){
                return redirect()->back()->with('fail', 'Something went wrong');}
                else{
                    return redirect()->to('register')->with('success', 'You are now successfully registered');
                }
            }
        }

public function _construct(){
    helper(['url','form']);
}
}