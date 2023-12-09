<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::where('status', 'Approve')->latest()->get();
        return view('Comment.index', compact('comments'));
    }

    public function create()
    {
        return view('Comment.create');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:comments,email',
            'current_position' => 'required',
            'current_company' => 'required',
            'comment' => 'required',
        ]);
        if ($validator) {
            Comment::create($request->all());
            return redirect('/')->with('success', 'Thank You For Your Support!');
        }
    }
}