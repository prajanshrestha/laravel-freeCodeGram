<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create() {
        return view("post.create");
    }

    public function store(Request $request) {
        $data = $request->validate([
            "caption" => "required",
            "image" => [ "required", "image" ]
        ]);
    }
}
