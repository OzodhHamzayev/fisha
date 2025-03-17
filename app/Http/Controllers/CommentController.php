<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function comment(CommentRequest $request)
    {
        $user = Auth::user();

        $validated = $request->validated();
        $comment = Comment::query()->create([
            'content' => $validated['name'],
            'user_id' => $user->id,
            'shop_id' => $validated['shop_id']
        ]);
        return redirect()->route('product.show', $validated['shop_id']);
    }
}
