<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Region extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'bendera',
        'lambang',
        'julukan',
        'motto',
        'semboyan',
        'lokasi',
        'latitude',
        'longitude',
        'dashum',
        'harjad',
        'harjadate',
        'ibukota',
        'kepdar',
        'wakepdar',
        'sekda',
        'ketdprd',
        'luasdaerah',
        'totalpopulasi',
        'kepadatanpop',
        'agama',
        'bahasa',
        'ipm',
        'zonwak',
        'kodebps',
        'kodepos',
        'pelatken',
        'kodeiso3166',
        'kodekemendagri',
        'apbd',
        'pad',
        'dau',
        'lagudaerah',
        'rumahadat',
        'senjata',
        'flora',
        'fauna',
        'situs'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($region) {
            $region->slug = Str::slug($region->name);
        });
    }

    public function getImageUrlAttribute($type)
    {
        return $this->$type ? asset('storage/' . $this->$type) : null;
    }

    /**
     * Get the candidates for the region.
     */
    public function candidates()
    {
        return $this->hasMany(Candidate::class);
    }

    public function pairs()
    {
        return $this->hasMany(Pair::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    // public function issues()
    // {
    //     return $this->hasMany(issue::class);
    // }

    /**
     * Get the upcoming elections for the region.
     */
    public function upcomingElections()
    {
        return $this->candidates()
            ->select('position', 'election_date')
            ->distinct()
            ->where('election_date', '>', now())
            ->orderBy('election_date');
    }

    /**
     * Scope a query to only include regions of a given type.
     */
    public function scopeOfType($query, $type)
    {
        return $query->where('type', $type);
    }

    /**
     * Get the region's full name (type + name).
     */
    public function getFullNameAttribute()
    {
        return $this->type . ' ' . $this->name;
    }
}
