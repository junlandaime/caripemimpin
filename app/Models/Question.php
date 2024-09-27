<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'question', 'region_id', 'options', 'answer'];

    protected $casts = [
        'options' => 'array',
    ];

    // public function getOptionsAttribute($value)
    // {
    //     return $value ? json_decode($value, true) : [];
    // }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
