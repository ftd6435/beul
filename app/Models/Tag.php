<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'role'];

    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class);
    }

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => strtoupper($value),
        );
    }
}
