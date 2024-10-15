<?php

namespace App\Http\Controllers;

use App\Http\Requests\TagRequest;
use App\Http\Resources\TagResource;
use App\Models\Tag;

class TagController extends Controller
{
    public function index()
    {
        return TagResource::collection(Tag::all());
    }

    public function store(TagRequest $request)
    {
        Tag::create($request->validated());
        return response()->json(['status' => 'success']);
    }

    public function show(Tag $tag)
    {
        return new TagResource($tag);
    }

    public function update(TagRequest $request, Tag $tag)
    {
        $tag->update($request->validated());
        return response()->json(['status' => 'success']);
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return response()->json(['status' => 'success']);
    }
}
