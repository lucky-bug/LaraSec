<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePost;
use App\Post;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SecureController extends Controller
{
    use AuthenticatesUsers;

    public function authenticate(Request $request) {
        if ($this->guard()->attempt($request->all())) {
            return new JsonResponse();
        } else {
            abort(403, 'Forbidden');
        }
    }

    public function sqli(string $id) {
        return new JsonResponse(
           DB::select(
               DB::raw("select * from posts where id = ? limit 1"),
               [$id]
           )
        );
    }

    public function policy(Post $post) {
        if (Auth::user()->can('view', $post)) {
            return new JsonResponse($post);
        } else {
            abort(403, 'Unauthorized action.');
        }
    }

    public function validation1(Request $request) {
        $validated = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);

        $post = new Post($validated);
        $post->user_id = Auth::id();
        $post->save();

        return new JsonResponse(
            $post
        );
    }

    public function validation2(StorePost $request) {
        $post = new Post($request->validated());
        $post->user_id = Auth::id();
        $post->save();

        return new JsonResponse(
            $post
        );
    }
}
