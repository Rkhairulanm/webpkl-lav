<?php

namespace App\Http\Controllers;

use App\Models\produksi;
use App\Models\user;
use Illuminate\Http\Request;

class ProduksiView extends Controller
{
    function index(){
        $data = produksi::orderBy('so', 'asc')->paginate(10);
        return view('pro.pages.dashboard', [
            'title' => 'Data'
        ])->with('data', $data);
    }
    public function show($user)
    {
        $users = User::select('nik', 'name', 'email', 'foto')->get();
        return view('pro.pages.user', compact('users'));
    }
}
