<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Repositories\EloquentSearchRepository;
use App\Repositories\Interfaces\SearchRepository;
use Elastic\Elasticsearch\ClientBuilder;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(EloquentSearchRepository $words, Request $request){
        $posts = Post::all();
        $elastic = ClientBuilder::create()->build();
        //Получаем запрос от формы
        $data = $request->slug_search;

        // Через EloquentSearchRepository прокидываем поиск запрос
        //$search = $words->search("$data");
        $params = [
            'index' => 'posts',
            'body'  => [
                'query' => [
                    'match' => [
                        'testField' => $data
                    ]
                ]
            ]
        ];

        $results = $elastic->search($params);
        $result = response($results);
        $search = $results['hits']['hits'];
        return view('post.posts',compact(['posts','search','data']));
    }
}
