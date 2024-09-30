<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Trade extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'trade_pair_id', 'amount', 'status', 'leverage', 'duration', 'action_type'];

    protected $keyType = 'string';
    public $incrementing = false;
    public static function boot() {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function trade_pair()
    {
        return $this->belongsTo(TradePair::class);
    }

    public function status()
    {
        if ($this->status == 'open')
        {
            return '<span class="badge badge-warning">Open</span>';
        }
        return '<span class="badge badge-success">Closed</span>';
    }

}
