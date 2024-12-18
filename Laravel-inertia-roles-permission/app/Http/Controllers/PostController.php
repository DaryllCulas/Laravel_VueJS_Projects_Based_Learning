<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;
use Inertia\Inertia;
use Inertia\Response;

class PostController extends Controller
{
    public function index(): Response
    {
        $posts = Post::all();

        return Inertia::render('Admin/Posts/PostIndex', [
            'posts' => PostResource::collection($posts)
        ]);
    }

    public function create(): Response
    {
        Gate::authorize('create', Post::class);
        return Inertia::render('Admin/Posts/Create');
    }

    public function store(CreatePostRequest $request): RedirectResponse
    {
        Gate::authorize('create', Post::class);
        Post::create($request->validated());

        return to_route('posts.index');
    }

    public function edit(Post $post): Response
    {
        Gate::authorize('update', $post);

        return Inertia::render('Admin/Posts/Edit', [
            'post' => new PostResource($post)
        ]);
    }

    public function update(CreatePostRequest $request, Post $post): RedirectResponse
    {
        Gate::authorize('update', $post);

        $post->update($request->validated());

        return to_route('posts.index');
    }

    public function destroy(Post $post): RedirectResponse
    {
        Gate::authorize('delete', $post);

        $post->delete();
        return back();
    }
}
