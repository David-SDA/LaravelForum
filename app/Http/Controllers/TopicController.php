<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function index(){
        return Topic::paginate(30);
    }

    public function show(string $slug, string $id): RedirectResponse | Topic{
        $topic = Topic::findOrFail($id);

        if($topic->slug !== $slug){
            return to_route('blog.show', ['slug' => $topic->slug, 'id' => $topic->id]);
        }

        return $topic;
    }

}
