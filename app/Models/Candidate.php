<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'prename',
        'name',
        'slug',
        'aftername',
        'ttl',
        'domisili',
        'agama',
        'position',
        'partai',
        'region_id',
        'riwayatpen',
        'prestasi',
        'karir',
        'akun',
        'nominal',
        'foto',
    ];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    // protected $casts = [
    //     'election_date' => 'date',
    // ];

    public function getShortDescriptionAttribute()
    {
        return substr($this->short_bio, 0, 100) . '...';
    }

    // public function scopeUpcoming($query)
    // {
    //     return $query->where('election_date', '>', now());
    // }

    public function scopeByRegion($query, $region)
    {
        return $query->where('region_id', $region);
    }

    public function scopeRandom($query)
    {
        return $query->inRandomOrder();
    }

    public function pasanganKetua()
    {
        return $this->hasOne(Pair::class, 'pemimpin_id');
    }

    public function pasanganWakil()
    {
        return $this->hasOne(Pair::class, 'wakil_id');
    }

    public function getFullNameAttribute()
    {
        return $this->prename . ' ' . $this->name . '' . $this->aftername;
    }
}
