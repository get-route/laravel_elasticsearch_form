<?php

namespace App\Models;

use Elastic\Elasticsearch\Client;
use Elastic\Elasticsearch\ClientBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Post extends Model
{
    use HasFactory;

    protected $casts = [
        'tags' => 'json',
    ];

    protected static function boot()
{
    parent::boot();
    static::created(function ($item){
        //Log::info($item->title." - запись 777");
        $client = ClientBuilder::create()->build();
        $params = [
            'index' => 'posts',
            'id'    => $item->id,
            'body'  => [ 'testField' => $item->title]
        ];
// Документ будет проиндексирован в my_index/_doc/<автоматически созданный идентификатор>
        $response = $client->index($params);
    });
}
}
