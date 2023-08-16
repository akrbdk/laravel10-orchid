<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Filters\Types\Like;
use Orchid\Screen\AsSource;

class Post extends Model
{
    use HasFactory, AsSource, Filterable;

    protected $fillable = [
        'title',
        'description',
        'body',
        'author'
    ];

    protected $allowedSorts = [
        'title',
        'author'
    ];

    protected $allowedFilters = [
        'title' => Like::class
    ];
}
