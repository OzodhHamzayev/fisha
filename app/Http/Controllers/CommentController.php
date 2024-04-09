<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Comment;
class CommentController extends Controller
{
    public function comment(CommentRequest $request){
       $user = Auth::user();
       $validated = $request->validated();
       Comment::query()->create([
            'comment' => $validated['comment'],
            'user_id' => $user->id,
            'shop_id' => $validated['shop_id']
       ]);
    }
}
