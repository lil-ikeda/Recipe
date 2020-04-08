<?php

namespace App\Http\Controllers;

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
        $query = Post::query();

        if(!empty($s_name))
        {
            $query->where('name', 'like', '%'.$s_name.'%');
        }

        $posts = $query->get();
        // dd($s_posts);
        return view('search/index')->with('posts', $posts);
    }

}
