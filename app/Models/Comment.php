<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['content', 'issue_id', 'ip_address'];

    public function issue()
    {
        return $this->belongsTo(Issue::class);
    }

    public function votes()
    {
        return $this->hasMany(CommentVote::class);
    }
}
