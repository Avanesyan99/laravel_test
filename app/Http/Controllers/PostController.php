<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use App\Models\PostTag;

class PostController extends Controller
{
    public function index() {
        $post = Post::find(2);
        dd($post->category);
        return view('post.index', compact('posts')); 
    }
    
    public function create() {
        $tags = Tag::all();
        $categories = Category::all();
        return view('post.create', compact('categories', 'tags'));
    }

    public function store() {
        $data = request()->validate([
            'title' => 'required | string',
            'post_content' =>  'required | string',
            'image' => 'required | string',
            'category_id' => '',
            'tags' => '',
        ]);

        $tags = $data['tags'];
        unset($data['tags']);

        $post = Post::create($data);
        $post->tags()->attach($tags);

        // foreach($tags as  $tag) {
        //     PostTag::firstOrCreate([
        //         'tag_id' => $tag,
        //         'post_id' => $post->id
        //     ]);
        // }
        return redirect()->route('post.index');
    }

    public function show(Post $post) {
        
        return view('post.show', compact('post'));

    }

    public function edit(Post $post) {
        $tags = Tag::all();
        $categories = Category::all();
        return view('post.edit', compact('post', 'categories', 'tags'));
    }

    public function update(Post $post) {
        // $post = Post::find(1);
        
        // $post->update([
        //     'title' => 'update',
        //     'post_content' => 'update',
        //     'image' => 'update',
        //     'likes' => 1,
        //     'is_published' => 1
        // ]);

        $data = request()->validate(
            [
                'title' => 'string',
                'post_content' => 'string',
                'image' => 'string',
                'category_id' => '',
                'tags' => ''
            ]
        );
        $tags = $data['tags'];
        unset($data['tags']);

        $post->update($data);
        $post->tags()->sync($tags);
        return redirect()->route('post.show', $post->id);
    }
    
    public function destroy(Post $post) {
        $post->delete();
        return redirect()->route('post.index');
    }

    public function delete() {
        $post = Post::find(2);
        $post->delete();

        dd("deleted");
    }


    public function restore() {
        $post = Post::withTrashed()->find(2);
        $post->restore();
        dd("restored");
    }

    // firstOrCreate
    // updateOrCreate

    public function firstOrCreate() {

        $post = Post::firstOrCreate([
            'title' => 'name for your post'
        ], [
            'title' => 'name for your post',
            'post_content' => 'min peni masi content',
            'image' => 'mihat img',
            'likes' => 500,
            'is_published' => 1,
        ]);

        dump($post->post_content);
        dd('finished');
    }

    public function updateOrCreate() {

        $post = Post::updateOrCreate([
            'title' => 'some not title'
        ],[
            'title' => 'update_or_create post',
            'post_content' => 'its not update_or_create content',
            'image' => 'update_or_create img',
            'likes' => 50,
            'is_published' => 1
        ]);

        dump($post->post_content);
        dd('finished');
    }
}
