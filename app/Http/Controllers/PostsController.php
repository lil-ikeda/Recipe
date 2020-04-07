<?php

namespace App\Http\Controllers;

use App\Material;
use App\Post;
use Auth;
use Validator;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;


class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        // 一覧機能
        $posts = Post::limit(10)
        ->orderBy('created_at', 'desc')
        ->get();
        // PostsModel::where('example', 'test')->search(new PostsSearch());
        
        return view('post/index', ['posts' => $posts]);
    }

    public function new()
    {
        return view('post/new');
    }

    public function store(Request $request)
    {
        //バリデーション（入力値チェック）
        $validator = Validator::make($request->all() , ['caption' => 'required|max:255', 'photo' => 'required']);

        //バリデーションの結果がエラーの場合
        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        // Postモデル作成
        $post = new Post;
        $post->caption = $request->caption;
        $post->name = $request->name;
        $post->user_id = Auth::user()->id;

        $post->save();
        
        $request->photo->storeAs('public/post_images', $post->id . '.jpg');
        
        // 「/」 ルートにリダイレクト
        return redirect('/');
    }

    public function show($post_id)
    {
        $post = Post::where('id', $post_id)
            ->firstOrFail();
        // \Log::info($post);
        // $materials = Material::where('post_id', $post->id)
        //     ->firstOrFail();
        // \Log::info($post);
        return view('post/show', ['post' => $post]);
    }

    public function destroy($post_id)
    {
        $post = Post::find($post_id);
        $post->delete();
        return redirect('/');
    }

    // public function search() {
    //     $query = QueryParser::parse(new PostsSearch());
    //     return redirect()->route('posts/index', $query);
    // }
}
