<?php

namespace App\Http\Controllers;

class PagesController extends Controller{

    public function getIndex(){
        return view('pages/welcome');
    }

    public function getAbout(){
        $first = "Solenn";
        $last = "Massot";
        $name = $first . " " . $last;
        $email = "solenn.massot@hotmail.fr";
        $data = [];
        $data['email'] = $email;
        $data['name'] = $name; 
        return view ('pages/about')->withData($data);
    }

    public function getContact(){
        return view ('pages/contact');
    }

    public function postContact(){

    }
}