<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{
    function index (){
            return view('layouts.home',[
                'title'=>'Home'
            ]);
    }
    function contact (){
            return view('layouts.contact',[
                'title'=>'Contact'
            ]);
        }
    function cad(){
            return view('layouts.cad',[
                'title'=>'CAD'
            ]);
        }
    function fabric (){
            return view('layouts.fabric',[
                'title'=>'Fabric'
            ]);
        }
    function pants (){
            return view('layouts.pants',[
                'title'=>'Product Section'
            ]);
        }
    function tshirt (){
            return view('layouts.tshirt',[
                'title'=>'Product Section'
            ]);
        }
    function shirt (){
            return view('layouts.shirt',[
                'title'=>'Product Section'
            ]);
        }
    function outer (){
            return view('layouts.outer',[
                'title'=>'Product Section'
            ]);
        }
}
