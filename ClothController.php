<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
   
class ClothController extends Controller
{   
 
    public function index()
    {
        $clothes = Cloth::all();
        return view('home',compact('clothes'));
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        Cloth::create($request->all());
        return redirect()->route('home')->with('success', 'データが登録されました');
    }
    public function show($id)
    {
        $cloth = Cloth::find($id);
        return view('item.show',compact('cloth'));
    }
    public function edit($id)
    {
        $cloth = Cloth::find($id);
        return view('edit',compact('cloth'));
    }
    public function update(Request $request, $id)
    {
        $update = [
            'category' => $request -> category,
            'brand' =>$request -> brand,
            'memo' =>$request -> memo
        ];
        Cloth::where('id', $id) ->update($update);
        return back()->with('success', '編集完了しました');
    }
    public function destroy($id)
    {
        Cloth::where('id', $id)->delete();
    }
}