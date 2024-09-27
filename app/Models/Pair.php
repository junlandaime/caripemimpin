<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pair extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'name',
        'nomor_urut',
        'party',
        'pemimpin_id',
        'wakil_id',
        'region_id',
        'short_bio',
        'full_bio',
        'image_url',
        'visi',
        'misi',
        'election_date',

    ];

    protected $casts = [
        'election_date' => 'date',
    ];

    public function scopeUpcoming($query)
    {
        return $query->where('election_date', '>', now());
    }

    public function pemimpin()
    {
        return $this->belongsTo(Candidate::class, 'pemimpin_id');
    }

    public function wakil()
    {
        return $this->belongsTo(Candidate::class, 'wakil_id');
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function getPasanganAttribute()
    {
        return $this->pemimpin->name . ' - ' . $this->wakil->name;
    }
}
