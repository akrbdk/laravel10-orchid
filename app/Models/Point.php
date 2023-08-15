<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

/**
 * @property string $name
 * @property int $id
 * @method static paginate(int $int)
 */
class Point extends Model
{
    use HasFactory;
    use AsSource;

    protected $fillable = ['name', 'active'];
}
