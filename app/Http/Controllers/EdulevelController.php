<?php

namespace App\Http\Controllers;

use App\Models\Edulevel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EdulevelController extends Controller
{
    public function data()
    {     
        $edulevels = DB::table('edulevels')->get();
        $edulevels = Edulevel::paginate(5);     
        // return view('edulevel.data',['edulevels'=> $edulevels]);
        return view('edulevel.data')->with('edulevels', $edulevels);
    }
    public function add()
    {
        return view('edulevel.add');
    }
    public function addProcess(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'desc' => 'required'
    ],
    [
        'name.required' => 'Nama Jenjang tidak boleh kosong',
        'desc.required' => 'Deskripsi tidak boleh kosong'
    ]);
        DB::table('edulevels')->insert([

            'name' => $request->name,
            'desc' => $request->desc
        ]);
        return redirect('edulevel')->with('status', 'Jenjang Berhasil Ditambah');
    }
    public function edit($id)
    { 
    $edulevel =  DB::table('edulevels')->where('id', $id)->first();
        return view('edulevel/edit', compact('edulevel'));
    }
    public function editProcess(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|min:2',
            'desc' => 'required'
        ],
        [
            'name.required' => 'Nama Jenjang tidak boleh kosong',
            'desc.required' => 'Deskripsi tidak boleh kosong'
        ]);
        $edulevel =  DB::table('edulevels')->where('id', $id)
                                           ->update([
                                            'name' => $request->name,
                                            'desc' => $request->desc
                                           ]);
        return redirect('edulevel')->with('status', 'Jenjang Berhasil Di Update');
    }
    public function delete($id)
    {
        DB::table('edulevels')->where('id', $id)->delete();
        return redirect('edulevel')->with('status', 'Jenjang Berhasil Di Hapus');
    }
    
}
