<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [];

    protected $casts = ['bank' => 'array'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
