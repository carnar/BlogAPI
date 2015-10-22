<?php

namespace Blog\Transformers;

class PostTransformer extends Transformer 
{
    public function transform($post)
    {
        return [
            'id' => (int) $post['id'],
            'title' => $post['title'],
            'body' => $post['content'],
            'published_at' => $post['created_at']
        ];
    }
}