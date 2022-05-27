<?php

namespace App\Traits;
use App\Post;

trait searchFilters {
    function composeQuery($request) {
        $elementQuery = Post::whereRaw('1 = 1');

        if ($request->filter_title) {
            $elementQuery->where(function($query) use ($request) { // per aggiungere le parentesi nell'SQL
                $query->where('title', 'LIKE', "%$request->filter_title%")
                    ->orWhere('content', 'LIKE', "%$request->filter_title%");
            });
        }

        if ($request->category) {
            $elementQuery->where('category_id', $request->category);
        }

        if ($request->author) {
            $elementQuery->where('user_id', $request->user);
        }

        if ($request->tags) {
            $tags = $request->tags;
            foreach ($tags as $tag) {
                $elementQuery->whereHas('tags', function($query) use ($tag) {
                    $query->where('name', $tag);
                });
            }
        }

        return $elementQuery;
    }
}