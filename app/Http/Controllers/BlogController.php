<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentFormRequest;
use App\Models\Category;
use App\Models\Client;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use GuzzleHttp\Promise\Create;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Type\Integer;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(random_int(1,5));
        $posts = Post::orderBy('created_at', 'desc')->get();
        $tags = Tag::select('id', 'name')->get();
        $categories = Category::select('id', 'name')->get();

        return view('blog.home', ['posts' => $posts, 'tags' => $tags, 'categories' => $categories]);
    }

    /**
     * Display the specified resource.
     */
   public function show(Post $post, string $slug)
   {
    
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        $categories = Category::select('id', 'name')->get();
        $tags = Tag::select('id', 'name')->get();
        

        if($slug !== $post->slug)
        {
            redirect()->route('blog.show', ['slug' => $post->slug, $post]);
        }

        return view('blog.show', [
            $slug,
            'post' => $post,
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags
        ]);
   }

   /**
    * Display a listing of resource per category
    */
   public function categorySingle($id, string $category)
   {
        
        if($name = Category::find($id)){
            $posts = Post::where('category_id', $id)->orderBy('created_at', 'desc')->get();
            $categories = Category::select('id', 'name')->get();
            $tags = Tag::select('id', 'name')->get();

            return view('blog.singleCategory', [
                'posts' => $posts,
                'tags' => $tags,
                'name' => $name->name,
                'categories' => $categories
            ]);
        }
        
        return redirect()->route('blog.error')->with('error', 'URL that you are trying to access in does not exist!');
   }


   /**
    * Display a listing of resource per Tag
    */
   public function singleTag($id, string $tag)
   {
        if(Tag::find($id)){
            $posts = Post::whereHas('tags', function($query) use ($id) {
                $query->where('id', $id);
            })->orderBy('created_at', 'desc')->get();
            $categories = Category::select('id', 'name')->get();
            $tags = Tag::select('id', 'name')->get();

            return view('blog.singleCategory', [
                'posts' => $posts,
                'tags' => $tags,
                'name' => $tag,
                'categories' => $categories
            ]);
        }

        return redirect()->route('blog.error')->with('error', 'URL that you are trying to access in does not exist!');
   }

   /**
    * Redirect for any url error
    */
   public function errorShow()
   {
        $categories = Category::select('id', 'name')->get();

        return view('shared.error', [
            'categories' => $categories
        ]);
   }

   public function comments(CommentFormRequest $request, Client $client)
   {
        $comment = new Comment();
        $client = Client::create($this->imageTreatment($request, new Client()));
        
        $comment->content = $request->validated('content');
        $comment->client_id = $client->id;
        $comment->post_id = $request->validated('post_id');
        $comment->save();

        return back()->with('success', 'Commentaire ajouté avec succès. Merci!');
   }

   /**
     * Image treatment store and update
     */
    protected function imageTreatment(CommentFormRequest $request, Client $client): array
    {
        $data = $request->validated();
        $image = $request->validated('image');
        
        if($image == null || $image->getError())
        {
            return $data;
        }

        if($client->image)
        {
            Storage::disk('public')->delete($client->image);
        }

        $imageName = time(). '-' .$image->getClientOriginalName();
        $imageName = str_replace(' ', '-', $imageName);
        $data['image'] = $image->storeAs('images', $imageName, 'public');

        return $data;
    }
   
    /**
     * Category page
     */

    public function category(): View
    {
        $categories = Category::select('id', 'name')->get();

        $catTab = [];
        
        foreach($categories as $key => $category)
        {
            $catTab[$key] = Post::where('category_id', $category->id)->limit(6)->get();
        }

        $tags = Tag::select('id', 'name')->get();
        $posts = Post::limit(10)->orderBy('created_at', 'desc')->get();

        return view('blog.category', ['categories' => $categories, 'tags' => $tags, 'tabCategories' => $catTab, 'posts' => $posts]);
    }

    /**
     * Contact page
     */

     public function contact(): View
     {
        $categories = Category::select('id', 'name')->get();
        return view('blog.contact', ['categories' => $categories]);
     }
}
