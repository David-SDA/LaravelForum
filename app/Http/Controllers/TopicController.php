<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TopicController extends Controller
{
    public function index(): View{
        return view('topic.index', [
            'topics' => Topic::paginate(1)
        ]);
    }

    public function show(string $slug, string $id): RedirectResponse | View{
        $topic = Topic::findOrFail($id);

        if($topic->slug !== $slug){
            return to_route('topic.show', ['slug' => $topic->slug, 'id' => $topic->id]);
        }

        return view('topic.show', [
            'topic' => $topic
        ]);
    }

}
