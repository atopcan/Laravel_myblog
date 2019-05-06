<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    public function index()
    {
       $posts = Post::paginate(3);
       return view('post.index', compact('posts'));
    }
    public function show(Post $post) /** model binding yöntemi */
    {
        return view('post.show', compact('post'));
    }
    public  function create()
    {
        return view('post.create');
    }
    public function store()
    {
        request()->validate([  /** validate(): zorunlu alan için  */
            'title' => 'min:1',
            'body' => 'min:1'
        ]);

      Post::create([                /** post tablomuzda yeni bir alan oluşturur */
          'title' => request('title'),
          'body' => request('body'),
          'user_id' => auth()->id(),   /** auth(): giriş yapmış kullanıcının id'sini getirir */

      ]);

    }
}
