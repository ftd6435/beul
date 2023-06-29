<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TagFormRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(Request $request)
    {  
        $tags = Tag::when($request->is('admin/tag/archive'), function($query){
            $query->onlyTrashed();
        })->orderBy('created_at', 'desc')->get();

        return view('admin.tags.tag', ['tags' => $tags]);
    }

    public function create()
    {
        $tag = new Tag();
        return view('admin.tags.forms', ['tag' => $tag]);
    }

    public function store(TagFormRequest $request)
    {
        Tag::create($request->validated());

        return redirect()->route('admin.tag.index')->with('success', 'Un tag à été ajouté avec succès');
    }

    public function edit(Tag $tag)
    {
        return view('admin.tags.forms', ['tag' => $tag]);
    }

    public function update(TagFormRequest $request, Tag $tag)
    {
        $tag->update($request->validated());
        return redirect()->route('admin.tag.index')->with('success', 'Le tag à été modifié avec succès');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('admin.tag.index')->with('success', 'Le tag à été supprimer avec succès');
    }

    public function restore($id)
    {
        $tag = Tag::onlyTrashed()->where('id', $id);
        $tag->restore();
        return redirect()->route('admin.tag.index')->with('success', 'Le tag à été restoré avec succès');
    }

    public function forceDelete($id)
    {
        $tag = Tag::onlyTrashed()->where('id', $id);
        $tag->forceDelete();
        return redirect()->route('admin.tag.index')->with('success', 'Le tag à été supprimer definitivement avec succès');
    }
}
