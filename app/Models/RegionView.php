<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegionView extends Model
{
    use HasFactory;

    protected $fillable = ['region_id', 'ip_address', 'user_agent'];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
