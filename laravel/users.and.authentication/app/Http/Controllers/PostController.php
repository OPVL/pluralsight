<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Like;
use App\Tag;

class PostController extends Controller
{
    public function getIndex()
    {
        $posts = Post::orderBy('created_at', 'desc')
            ->paginate(2);
        return view('blog.index', ['posts' => $posts]);
    }

    public function getAdminIndex()
    {
        $posts = Post::withTrashed()
            ->orderBy('title', 'asc')
            ->get();
        return view('admin.index', ['posts' => $posts]);
    }

    public function getPost($id)
    {
        $post = Post::where('id', $id)
            //->with('likes')
            ->get();
        $post = Post::find($id);
        return view('blog.post', ['post' => $post]);
    }

    public function getLikePost($id)
    {
        $post = Post::find($id);
        $like = new Like();
        $post->likes()->save($like);
        return redirect()->back();
    }

    public function getTagPost($id, $tagId)
    {
        $post = Post::find($id);
        $post->tags()->attach($tagId);
        return redirect()->back();
    }

    public function getAdminCreate()
    {
        $tags = Tag::all();
        return view('admin.create', ['tags' => $tags]);
    }

    public function getAdminEdit($id)
    {
        $post = Post::find($id);
        $tags = Tag::all();
        return view('admin.edit', ['post' => $post, 'postId' => $id, 'tags' => $tags]);
    }

    public function postAdminCreate(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|min:1',
            'content' => 'required|min:10',
        ]);

        $post = new Post([
            'title'     => $request->input('title'),
            'content'   => $request->input('content')
        ]);

        $post->save();
        $post->tags()->attach($request->input('tags') === null ? [] : $request->input('tags'));

        return redirect()->route('admin.index')->with('info', 'Post Created, Title is: ' . $post->title);
    }

    public function postAdminUpdate(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:1',
            'content' => 'required|min:10',
        ]);
        $post = Post::find($request->input('id'));
        $post->title = $request->input('title');
        $post->content = $request->input('content');

        $post->save();
        // $post->tags()->detach();
        // $post->tags()->attach($request->input('tags') === null ? [] : $request->input('tags'));
        $post->tags()->sync($request->input('tags') === null ? [] : $request->input('tags')); // This lets laravel essentially do the above but leaves existing relations alone.

        return redirect()->route('admin.index')->with('info', 'Post Edited, new Title is: ' . $request->input('title'));
    }

    public function getAdminDelete($id)
    {
        $post = Post::find($id);
        $post->delete();
        $post->likes()->delete();
        $post->tags()->detach();

        return redirect()->route('admin.index')->with('info', 'Post Deleted!');
    }

    public function getAdminRestore($id)
    {
        $post = Post::onlyTrashed()
            ->where('id', $id) // can omit '=' as equals is the default
            ->first();
        $post->restore();
        $post->likes()->restore();

        return redirect()->route('admin.index')->with('info', 'Post Restored: ' . $post->title);
    }
}
