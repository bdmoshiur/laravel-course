<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
class UserController extends Controller
{

    // public function index(){
    //     $users = User::all();
    //     return $users;
    // }

    // public function show($id){

    //     $user = User::FindOrFail($id);
    //     return $user;

    // }



    // public function create(){

    //    $data = [
    //        'name' => 'moshiur',
    //        'email' => 'moshiur@gmail.com',
    //        'password' => '12345678',
    //    ];

    //    User::create($data);
    //    return "successfully";
    // }



    // public function edit($id){

    //     $user = User::findOrFail($id);
    //     $user->name = "Musfikur";
    //     $user->save();

    //     return "edited";
    // }
    // public function delete($id){

    //     $user = User::findOrFail($id);
    //     $user->delete();

    //     return "Deleted";
    // }



    // public function index(){

    //     $users = User::all();
    //     return $users;
    // }

    // public function show($id){
    //     return $id;
    // }

    // public function age($name = "moshiur", $age = 67){
      
    //    return $age . ' ' . $name;
   
    // }


    // public function create(){

    //     return "Uesr added 1";
    // }

    // public function store(){

    //     return view('create_user');
    // }


    // public function update(){
    //     return "update user";
    // }



    public function post(){
        return "post";
    }












}
