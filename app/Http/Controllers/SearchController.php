<?php

namespace App\Http\Controllers;

use App\Material;
use App\Post;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;


class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $s_name = $request->input('s_name');
        if(!empty($s_name))
        {
            $posts = Post::
                join('materials', 'posts.id', 'materials.post_id')
                ->where('materials.name', 'like', '%'.$s_name.'%')
                ->select('posts.*')
                ->distinct()
                ->get();
            return view('search/index')->with('posts', $posts);
        } else {
            return redirect('/')->with('flash_message', '材料名を入力してください');
        };
    }

}
