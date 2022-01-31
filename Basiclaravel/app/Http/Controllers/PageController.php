<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function Home()
    {
        return view("Home");
    }

    public function contact()
    {
        return view("contact");
    }

    public function about()
    {
        return view("about");
    }
    public function product()
    {
        
        $producted=array("web dev","software eng","computer network");
        return view('product')->with('product',$producted);
    }

    public function item()
    {
        
        $itemed=array("web dev 1","web dev-2","software eng","computer network");
        return view('item')->with('item',$itemed);
    }
}
