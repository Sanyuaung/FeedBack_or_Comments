<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        return view('Comment.index', compact('comments'));
    }

    public function create()
    {
        return view('Comment.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:comment,email',
            'current_position' => 'required',
            'current_company' => 'required',
            'comment' => 'required',
            'status' => 'required',
        ]);
        if ($validator) {
            Comment::create($request->all());
            return redirect('/')->with('success', 'comment submitted successfully!');
        }
    }
}