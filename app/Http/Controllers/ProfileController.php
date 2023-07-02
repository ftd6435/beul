<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->update($this->userProfile($request, $request->user()));

        return Redirect::route('profile.edit')->with('success', 'Le profile user a été modifié avec succès');
    }

    protected function userProfile(ProfileUpdateRequest $request, User $user): array
    {
        $data = $request->validated();
        $image = $request->validated('image');
        
        if($image == null || $image->getError())
        {
            return $data;
        }

        if($user->image)
        {
            Storage::disk('public')->delete($user->image);
        }

        $imageName = time(). '-' .$image->getClientOriginalName();
        $imageName = str_replace(' ', '-', $imageName);
        $data['image'] = $image->storeAs('images', $imageName, 'public');
 
        return $data;
    }

    public function details()
    {
        return view('profile.showUser');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();
       
        $posts = Post::where('user_id', $user->id)->get();
        foreach($posts as $post){
            Post::where('id', $post->id)->delete();
        }

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/')->with('success', 'Vous avez supprimé votre compte avec succès. C\'etais un plaisir de vous avoir.');
    }
}
