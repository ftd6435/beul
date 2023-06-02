<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['fullname', 'email', 'website', 'image'];

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
