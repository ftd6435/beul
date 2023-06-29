<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['fullname', 'email', 'message'];

    protected function message(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => Str::of($value)->limit(40),
        );
    }
}
