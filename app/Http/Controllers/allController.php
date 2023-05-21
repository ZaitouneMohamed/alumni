<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Post;
use Illuminate\Http\Request;

class allController extends Controller
{
    public function addComment(Request $request, $id)
    {
        Comments::create([
            "body" => $request->body,
            "user_id" => auth()->user()->id,
            "post_id" => $id,
        ]);
        return redirect()->back();
    }
    public function EvenetsList()
    {
        $events = Post::latest()->where('type', 1)->paginate(15);
        return view('landing.content.events', compact('events'));
    }
    public function OffresList()
    {
        $offres = Post::latest()->where('type', 2)->paginate(15);
        return view('landing.content.offres', compact('offres'));
    }
    public function ActualiteList()
    {
        $actualite = Post::latest()->where('type', 3)->paginate(15);
        return view('landing.content.actualite', compact('actualite'));
    }
}
