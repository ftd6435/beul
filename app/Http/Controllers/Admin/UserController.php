<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRoleRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::when($request->is('admin/user/archive'), function($query){
            $query->onlyTrashed();
        })->orderBy('created_at', 'desc')->get();

        return view('admin.users.index', ['users' => $users]);
    }

    public function edit(User $user)
    {
        return view('admin.users.form', ['user' => $user]);
    }

    public function update(UserRoleRequest $request, $id)
    {
        $user = User::findOrFail($id);
        
        if($request->validated()){
            $user->role = $request->role;
            $user->save();
        }

        return redirect()->route('admin.user.index')->with('success', 'Role du user à été modifé avec succès');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.user.index')->with('success', 'Le user a été supprimer avec succès');
    }

    public function restore($id)
    {
        $user = User::onlyTrashed()->where('id', $id);

        $posts = Post::onlyTrashed()->where('user_id', $id)->get();
        foreach($posts as $post){
            Post::onlyTrashed()->where('id', $post->id)->restore();
        }

        $user->restore();
        return redirect()->route('admin.user.index')->with('success', 'Le user a été restoré avec succès');
    }

    public function forceDelete($id)
    {
        $user = User::onlyTrashed()->where('id', $id);

        $posts = Post::onlyTrashed()->where('user_id', $id)->get();
        foreach($posts as $post){
            Post::onlyTrashed()->where('id', $post->id)->forceDelete();
        }

        $user->forceDelete();
        return redirect()->route('admin.user.index')->with('success', 'Le user a été supprimé definitivement avec succès');
    }
}
