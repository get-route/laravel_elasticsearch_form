<?php

namespace App\Repositories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

class EloquentSearchRepository
{
    public function search(string $word): Collection
    {
        return Post::query()
            ->where(fn ($query) => (
            $query->where('body', 'LIKE', "%{$word}%")
                ->orWhere('title', 'LIKE', "%{$word}%")
            ))
            ->get();
    }
}
