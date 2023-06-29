<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminFormRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Post::class, 'post');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
        $posts = Post::with('tags', 'category')
                                        ->when($request->is('admin/post/archive'), function ($query){
                                            $query->onlyTrashed();
                                        })
                                        ->orderBy('created_at', 'desc')->paginate(6);
        
        return view('admin.posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $post = new Post();
        $tags = Tag::select('id', 'name')->get();
        $categories = Category::select('id', 'name')->get();

        return view('admin.posts.form', [
            'post' => $post,
            'tags' => $tags,
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminFormRequest $request)
    {
        $post = Post::create($this->imageTreatment($request, new Post()));
        $post->tags()->sync($request->validated('tags'));

        return redirect()->route('admin.dashboard')->with('success', 'Un article a été ajouté avec succès');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {

        $tags = Tag::select('id', 'name')->get();
        $categories = Category::select('id', 'name')->get();

        return view('admin.posts.form', [
            'post' => $post,
            'tags' => $tags,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdminFormRequest $request, Post $post)
    {
        $post->update($this->imageTreatment($request, $post));
        $post->tags()->sync($request->validated('tags'));

        return redirect()->route('admin.post.index')->with('success', 'L\'article a été modifié avec succès');
    }

    /**
     * Image treatment store and update
     */
    protected function imageTreatment(AdminFormRequest $request, Post $post): array
    {
        $data = $request->validated();
        $image = $request->validated('image');
        
        if($image == null || $image->getError())
        {
            return $data;
        }

        if($post->image)
        {
            Storage::disk('public')->delete($post->image);
        }

        $imageName = time(). '-' .$image->getClientOriginalName();
        $imageName = str_replace(' ', '-', $imageName);
        $data['image'] = $image->storeAs('images', $imageName, 'public');

        return $data;
    }

    public function restore($id)
    {
        $post = Post::onlyTrashed()->findOrFail($id);
        $post->restore();
        return redirect()->route('admin.dashboard')->with('success', 'L\'article a été restoré avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.dashboard')->with('success', 'L\'article a été supprimer avec succès');
    }

    public function forceDelete($id)
    {
        $post = Post::onlyTrashed()->findOrFail($id);
        $post->forceDelete();
        return redirect()->route('admin.dashboard')->with('success', 'L\'article a été supprimer definitivement avec succès');
    }
}
