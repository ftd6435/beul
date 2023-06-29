<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Client;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Newsletter;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        $categories = Category::orderBy('created_at', 'desc')->get();
        $tags = Tag::orderBy('created_at', 'desc')->get();
        $users = User::orderBy('created_at', 'desc')->get();
        $reactions = Comment::orderBy('created_at', 'desc')->get();
        $clients = Client::orderBy('created_at', 'desc')->get();
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        $newsletters = Newsletter::orderBy('created_at', 'desc')->get();

        return view('admin.dashboard.index', [
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
            'users' => $users,
            'reactions' => $reactions,
            'clients' => $clients,
            'contacts' => $contacts,
            'newsletters' => $newsletters
        ]);
    }
}
