<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateView extends Model
{
    use HasFactory;

    protected $fillable = ['candidate_id', 'ip_address', 'user_agent'];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
}
