<?php
namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);
        // getPaginateByLimit()はPost.phpで定義したメソッドです。
    }

        /**
         * 特定IDのpostを表示する
         *
         * @params Object Post // 引数の$postはid=1のPostインスタンス
         * @return Reposnse post view
         */
        public function show(Post $post)
        {
            // $data = $post->id(1)->get();
        
            return view('posts.show')->with(['post' => $post]);
        //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
        }
}