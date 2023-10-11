<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\produksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProduksiView extends Controller
{
     function index(){
        $data = produksi::orderBy('so', 'asc')->paginate();
        return view('pro.pages.dashboard', [
            'title' => 'Dashboard'
        ])->with('data', $data);
    }
    public function show()
    {
        $user = Auth::user();
        return view('pro.pages.user', compact('user'), [
            'title' => 'Profile'
        ]);
    }
}
