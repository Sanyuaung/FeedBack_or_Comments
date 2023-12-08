@extends('Comment.layout')

@section('content')
    <h1 class="text-2xl font-bold mb-4">comment List</h1>

    @if(session('success'))
        <div class="bg-green-200 p-4 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    @foreach($comments as $comment)
        <div class="bg-white p-4 mb-4 rounded">
            <p><strong>Name:</strong> {{ $comment->name }}</p>
            <p><strong>Email:</strong> {{ $comment->email }}</p>
            <p><strong>Position:</strong> {{ $comment->current_position }}</p>
            <p><strong>Company:</strong> {{ $comment->current_company }}</p>
            <p><strong>Comment:</strong> {{ $comment->comment }}</p>
            <p><strong>Status:</strong> {{ $comment->status }}</p>
        </div>
    @endforeach
@endsection
