<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['content'];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }

    protected function content(): Attribute{
        return Attribute::make(
            get: fn(string $value) => Str::of($value)->limit(50),
        );
    }

}
