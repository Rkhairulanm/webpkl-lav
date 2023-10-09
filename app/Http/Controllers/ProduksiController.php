<?php

namespace App\Http\Controllers;

use App\Models\produksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class ProduksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = produksi::orderBy('so', 'asc')->paginate(10);
        return view('pro.pages.data', [
            'title' => 'Data'
        ])->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pro.pages.create', [
            'title' => 'Create'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('so', $request->so);
        Session::flash('brand', $request->brand);
        Session::flash('artikel', $request->artikel);
        Session::flash('total', $request->total);
        Session::flash('output', $request->output);
        $request->validate([
            'so' => 'numeric',
            'total' => 'numeric',
            'output' => 'numeric',
            'foto' => 'mimes:png,jpg,jpeg,gif'

        ], [
            'so.numeric' => 'SO Must be numeric',
            'total.numeric' => 'Total Must be numeric',
            'output.numeric' => 'Output Must be numeric',
            'foto.mimes' => 'Foto Only Allowed JPEG, JPG, PNG, GIF Only'
        ]);

        $foto = $request->file('foto');
        $foto_eks = $foto->extension();
        $foto_name = date('ymdhis') . "." . $foto_eks;
        $foto->move(public_path('foto'), $foto_name);

        $data = [
            'so' => $request->input('so'),
            'brand' => $request->input('brand'),
            'artikel' => $request->input('artikel'),
            'total' => $request->input('total'),
            'output' => $request->input('output'),
            'foto' => $foto_name
        ];
        produksi::create($data);
        return redirect('data')->with('success', 'Input Data Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($produksi)
    {
        $data = produksi::where('so', $produksi)->first();
        return view('pro.pages.show', [
            'title' => 'Show'
        ])->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($produksi)
    {
        $data = produksi::where('so', $produksi)->first();
        return view('pro.pages.edit', [
            'title' => 'Edit'
        ])->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $produksi)
    {
        $request->validate([
            'total' => 'numeric',
            'output' => 'numeric',
            'foto' => 'mimes:png,jpg,jpeg,gif'

        ], [
            'total.numeric' => 'Total Must be numeric',
            'output.numeric' => 'Output Must be numeric',
            'foto.mimes' => 'Foto Only Allowed JPEG, JPG, PNG, GIF Only'
        ]);
        $data = [
            'brand' => $request->input('brand'),
            'artikel' => $request->input('artikel'),
            'total' => $request->input('total'),
            'output' => $request->input('output'),
        ];

        if ($request->hasFile('foto')) {
            $request->validate([
                'foto' => 'mimes:png,jpg,jpeg,gif'
            ], [
                'foto.mimes' => 'Foto Only Allowed JPEG, JPG, PNG, GIF Only'
            ]);
            $foto = $request->file('foto');
            $foto_eks = $foto->extension();
            $foto_name = date('ymdhis') . "." . $foto_eks;
            $foto->move(public_path('foto'), $foto_name);

            $data_foto = produksi::where('so', $produksi)->first();
            File::delete(public_path('foto').'/'.$data_foto->$foto);

            $data['foto'] = $foto_name;
        }

        produksi::where('so', $produksi)->update($data);
        return redirect('/data')->with('success', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($produksi)
    { {
            $data = produksi::where('so', $produksi)->first();
            File::delete(public_path('foto') . '/' . $data->foto);
            produksi::where('so', $produksi)->delete();
            return redirect('/data')->with('success', 'Delete Successfully');
        }
    }
}
