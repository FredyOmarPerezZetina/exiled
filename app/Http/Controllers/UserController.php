<?php
namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
class UserController extends Controller{
    public function Home(){
        return view('page.userHome');
    }
}