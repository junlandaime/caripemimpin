<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pair extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_urut',
        'party',
        'slug',
        'region_id',
        'pemimpin_id',
        'wakil_id',
        'short_bio',
        'full_bio',
        'visi',
        'misi',
        'image_url',
        'election_date',
        'views'
    ];

    protected $casts = [
        'election_date' => 'date',
        'views' => 'integer'
    ];

    public function scopeUpcoming($query)
    {
        return $query->where('election_date', '>', now());
    }

    public function pemimpin(): BelongsTo
    {
        return $this->belongsTo(Candidate::class, 'pemimpin_id');
    }

    public function wakil(): BelongsTo
    {
        return $this->belongsTo(Candidate::class, 'wakil_id');
    }

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }

    public function getPasanganAttribute()
    {
        return $this->pemimpin->name . ' - ' . $this->wakil->name;
    }
}
