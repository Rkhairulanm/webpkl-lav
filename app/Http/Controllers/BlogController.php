<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{
    function index (){
            return view('layouts.home',[
                'title'=>'Home',
                'isProduct' => 'false'
            ]);
    }
    function contact (){
            return view('layouts.contact',[
                'title'=>'Contact',
                'isProduct' => 'false'
            ]);
        }
    function cad(){
            return view('layouts.cad',[
                'title'=>'CAD',
                'isProduct' => 'false'
            ]);
        }
    function fabric (){
            return view('layouts.fabric',[
                'title'=>'Fabric',
                'isProduct' => 'false'
            ]);
        }
    function pants (){
            return view('layouts.pants',[
                'title'=>'Product Section',
                'isProduct' => 'true'
            ]);
        }
    function tshirt (){
            return view('layouts.tshirt',[
                'title'=>'Product Section',
                'isProduct' => 'true'
            ]);
        }
    function shirt (){
            return view('layouts.shirt',[
                'title'=>'Product Section',
                'isProduct' => 'true'
            ]);
        }
    function outer (){
            return view('layouts.outer',[
                'title'=>'Product Section',
                'isProduct' => 'true'
            ]);
        }
}
