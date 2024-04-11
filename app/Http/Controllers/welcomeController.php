<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function about(){
        $name='amy';
        $heroes =['魯書','密活格','三東艾斯','喬八','日照索羅'];
        $js="<script>alert('hi');</script>";
        return view('pages/about',['name'=>$name,'js'=>$js,'heroes'=>$heroes]);
    }
}
