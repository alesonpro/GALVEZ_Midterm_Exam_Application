<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $data1 = array (
            "prod_name1" => "Attack on Titan",
            "prod_genre1" => "Action",
            "prod_price1" => 1200
        );

        $data2 = array (
            "prod_name2" => "Death Note",
            "prod_genre2" => "Action",
            "prod_price2" => 1200
        );
        return view ('anime', $data1, $data2);
    }
}
