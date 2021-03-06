<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePost;
use App\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VulnerableController extends Controller
{
    public function sqli(string $id) {
        return new JsonResponse(
            DB::select(
                "select * from posts where id = $id limit 1"
            )
        );
    }

    public function policy(Post $post) {
        return new JsonResponse($post);
    }

    public function validation(Request $request) {
        $post = new Post($request->all());
        $post->user_id = Auth::id();
        $post->save();

        return new JsonResponse(
            $post
        );
    }
}
