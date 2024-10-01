<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PairView extends Model
{
    use HasFactory;

    protected $fillable = ['pair_id', 'ip_address', 'user_agent'];

    public function pair()
    {
        return $this->belongsTo(Pair::class);
    }
}
