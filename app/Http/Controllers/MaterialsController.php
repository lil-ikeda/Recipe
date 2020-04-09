<?php

namespace App\Http\Controllers;

use App\Material;
use App\Post;
use Auth;
use Validator;

use Illuminate\Http\Request;

class MaterialsController extends Controller
{
    public function new()
    {
        if(Auth::user()->email == "admin@admin.com")
        {
            return view('materials/new');
        } else {
            return redirect('/')->with('flash_message', '管理ユーザー以外はアクセスできません');
        }
    }

    public function store(Request $request)
    {
        $material = new Material;
        $material->post_id = $request->post_id;
        $material->name = $request->name;
        $material->amount = $request->amount;
        $material->save();
        return redirect('/materials/new');
    }
}