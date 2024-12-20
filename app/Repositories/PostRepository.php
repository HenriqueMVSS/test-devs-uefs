<?php
namespace App\Repositories;

use App\Models\Post;

class PostRepository
{
    public function all()
    {
        return Post::with(['user', 'tags'])->get();
    }

    public function find($id)
    {
        return Post::with(['user', 'tags'])->findOrFail($id);
    }

    public function create(array $data)
    {
        return Post::create($data);
    }

    public function update($id, array $data)
    {
        $post = Post::findOrFail($id);
        $post->update($data);
        return $post;
    }

    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
    }
}