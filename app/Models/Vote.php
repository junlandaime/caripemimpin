<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    protected $fillable = ['issue_id', 'ip_address'];

    public function issue()
    {
        return $this->belongsTo(Issue::class);
    }
}
